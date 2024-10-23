$(function () {
  let urlType = new URLSearchParams(window.location.search);
  let type = urlType.get("type");
  $.ajax({
    type: "post",
    url: "action.php",
    data: {
      action: "select",
      type: type,
    },
    dataType: "json",
    success: function (response) {
      //console.log(response);
      if (type == "updateRow" || type == "deleteRow") {
        $.each(response, function (i, v) {
          condition =
            type == "updateRow"
              ? `<button class='btn btn-sm btn-success' id='editBtn' name='editBtn' data-id=${v.id} data-bs-toggle="modal" data-bs-target="#updateForm">Edit</button>`
              : `<button class='btn btn-sm btn-danger' id='deleteBtn' name='deleteBtn' data-id=${v.id}>Delete</button>`;

          $("#tbody").append(`<tr>
                    <td>${v.id}</td>
                    <td>${v.name}</td>
                    <td>${v.email}</td>
                    <td>${v.city}</td>
                    <td>${v.gender}</td>
                    <td>${condition}</td>
                    </tr>`);
        });
      } else if (type == "singleRow") {
        $("#tbody").append(`<tr>
                <td>${response.id}</td>
                <td>${response.name}</td>
                <td>${response.email}</td>
                <td>${response.city}</td>
                <td>${response.gender}</td>
            </tr>`);
      } else if (type == "join") {
        $.each(response, function (i, v) {
          $("#tbody").append(`<tr>
          <td>${v.id}</td>
          <td>${v.name}</td>
          <td>${v.email}</td>
          <td>${v.city}</td>
          <td>${v.gender}</td>
           <td>${v.hobbies}</td>
      </tr>`);
        });
      } else if (type == "groupBy") {
        $.each(response, function (i, v) {
          $("#tbody").append(`<tr>
            <td>${v.name}</td>
            <td>${v.number_of_names}</td>
            </tr>`);
        });
      } else {
        //console.log(response);
        $.each(response, function (i, v) {
        var id= (typeof(v.id)=="undefined") ? '-' : v.id;
        var name= (typeof(v.name)=="undefined") ? '-' : v.name;
        var email= (typeof(v.email)=="undefined") ? '-' : v.email;
        var city= (typeof(v.city)=="undefined") ? '-' : v.city;
        var gender= (typeof(v.gender)=="undefined") ? '-' : v.gender;
          $("#tbody").append(`<tr>
                    <td>${id}</td>
                    <td>${name}</td>
                    <td>${email}</td>
                    <td>${city}</td>
                    <td>${gender}</td>
                    </tr>`);
        });
      }
    },
  });

  $("body").on("click", "#editBtn", function () {
    var id = $(this).data("id");
    $.ajax({
      type: "post",
      url: "action.php",
      data: {
        action: "select",
        id: id,
      },
      dataType: "json",
      success: function (response) {
        $("#id").val(response.id);
        $("#name").val(response.name);
        $("#email").val(response.email);
        $("#pass").val(response.password);
        $("#city").val(response.city);
        $(`#${response.gender}`).prop("checked", true);
      },
    });
  });
  $("body").on("click", "#deleteBtn", function () {
    var id = $(this).data("id");
    $.ajax({
      type: "post",
      url: "action.php",
      data: {
        action: "delete",
        id: id,
      },
      dataType: "json",
      success: function (response) {
        alert(response.message);
        window.location.href = "index.php?type=deleteRow";
      },
    });
  });

  $("body").on("submit", "#myForm", function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    //console.log(formData);

    $.ajax({
      type: "post",
      url: "action.php",
      data: {
        action: "insert",
        data: formData,
      },
      dataType: "json",
      success: function (response) {
        $("#myForm").trigger("reset");
        //$('input[name="id"]').val("");
        alert(response.message);
        if (type == "updateRow") {
        
          window.location.href = "index.php?type=updateRow";
        } else {
      
          window.location.href = "index.php?type=getRows";
        }
      },
    });
  });
});

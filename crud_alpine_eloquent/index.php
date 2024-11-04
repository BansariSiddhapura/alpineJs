<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script defer src="./assets/js/cdn.min.js"></script>
    <!-- <script src="./assets/js/custom.js"></script> -->
    <title>Index</title>
</head>

<body>
    <nav class="navbar bg-dark bg-gradient">
        <div class="container-fluid d-flex justify-content-center">
            <span class="navbar-brand mb-0 h1 text-light">Students Data</span>
        </div>
    </nav>

    <div class="container w-50 my-5" x-data="storageData()" x-cloak>
        <div class="d-flex justify-content-end my-3">
            
            <button x-on:click="showItems()" class="btn bg-info bg-gradient bg-opacity-50 text-info-emphasis" x-text="tableShow ? 'add record' : 'show table'"></button>
        </div>
        <div class="card border shadow-sm rounded-2 my-3" x-show="formShow">
            <div class="p-2 bg-info bg-gradient bg-opacity-25 m-0 text-dark fs-3 fw-medium text-center rounded-2">
                <span>Student Form</span>
            </div>
            <form x-on:submit.prevent="saveData()" class="p-4" x-ref="reset">
                <input type="hidden" name="id">
                <div class="mb-3">
                    <label for="sname" class="form-label">Student Full Name</label>
                    <input type="text" name="sname" id="sname" class="form-control" placeholder="Enter full name" x-model="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" x-model="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" x-model="password">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Select City</label>
                    <!-- <textarea name="address" id="address" class="form-control" x-model="address"></textarea> -->
                    <select name="" class="form-control" x-model="address">
                        <option value="" selected>Select City</option>
                        <option value="rajkot">Rajkot</option>
                        <option value="amadavad">Amadavad</option>
                        <option value="gondal">Gondal</option>
                        <option value="vadodra">Vadodra</option>
                    </select>
                </div>
                <div class="mb-3 d-flex gap-3">
                    <label class="form-label">Gender</label>
                    <div class="form-check">
                        <label>Male</label>
                        <input type="radio" name="gender" class="form-check-input" x-model="gender" value="male">
                    </div>
                    <div class="form-check">
                        <label>Female</label>
                        <input type="radio" name="gender" class="form-check-input" x-model="gender" value="female">
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" x-on:click="$refs.reset.reset()" class="btn bg-success-subtle" name="save_student" id="save_students">Save</button>
                </div>
            </form>
        </div>
        <!-- table -->
        <div x-show="tableShow">
            <div class="d-flex gap-2 my-3">
                <input type="search" class="form-control" placeholder="search for students.." x-model="search_data">
                <button x-on:click="searchData()" class="btn bg-info bg-gradient bg-opacity-50">Search</button>
                <select name="" class="form-control" x-model="selectedGender" x-on:change="searchData">
                    <option value="" selected>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <select name="" class="form-control" x-model="selectedCity" x-on:change="searchData">
                    <option value="" selected>Select City</option>
                    <option value="rajkot">Rajkot</option>
                    <option value="amadavad">Amadavad</option>
                    <option value="gondal">Gondal</option>
                    <option value="vadodra">Vadodra</option>
                </select>
            </div>
            <table class="table table-striped table-secondary">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <template x-for="table in tableData">
                        <tr>
                            <td x-text="table.id"></td>
                            <td x-text="table.name"></td>
                            <td x-text="table.email"></td>
                            <td x-text="table.address"></td>
                            <td x-text="table.gender"></td>
                            <td>
                                <button x-on:click="deleteRecord($el.id)" :id="table.id" class="btn btn-sm bg-danger-subtle">Delete</button>
                                <button x-on:click="editRecord($el.id)" :id="table.id" class="btn btn-sm bg-warning-subtle">Edit</button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>

        </div>

    </div>
    <script>
        function storageData() {

            return {
                tableShow: false,
                formShow: true,
                id: '',
                name: '',
                email: '',
                password: '',
                address: '',
                gender: '',
                tableData: {},
                search_data: '',
                selectedGender: '',
                selectedCity: '',

                showItems() {
                    this.tableShow = !this.tableShow
                    this.formShow = !this.formShow

                    fetch("action.php", {
                            "method": "post",
                            "header": {
                                "Content-Type": "application/json; charset=utf"
                            },
                            "body": JSON.stringify({
                                action: 'show',
                            })
                        }).then(res => res.json())
                        .then(res => this.tableData = res)


                },
                saveData() {
                    studentsDetails = {
                        'id': this.id,
                        'name': this.name,
                        'email': this.email,
                        'password': this.password,
                        'address': this.address,
                        'gender': this.gender
                    }
                    //console.log(studentsDetails);
                    fetch("action.php", {
                            "method": "post",
                            "header": {
                                "Content-Type": "application/json; charset=utf"
                            },
                            "body": JSON.stringify({
                                studentsDetails: studentsDetails,
                                action: 'insert'
                            }) //convert a studentDetails object into string
                        }).then(res => res.json())
                        .then(res => alert(res.message))
                        .then(res => location.reload())


                },

                deleteRecord(id) {
                    // console.log(id);               
                    fetch("action.php", {
                            'method': 'post',
                            'header': {
                                "Content-Type": "application/json; charset=utf"
                            },
                            body: JSON.stringify({
                                action: "delete",
                                id: id
                            })
                        }).then(res => res.json())
                        .then(res => alert(res.message))
                        .then(res => location.reload())
                },
                searchData() {
                    search = this.search_data ? this.search_data : ''
                    selectGender = this.selectedGender ? this.selectedGender : ''
                    selectCity = this.selectedCity ? this.selectedCity : ''
                    fetch("action.php", {
                            "method": "post",
                            "header": {
                                "Content-Type": "application/json; charset=utf"
                            },
                            "body": JSON.stringify({
                                action: 'show',
                                search: search,
                                selectGender: selectGender,
                                selectCity: selectCity
                            })
                        }).then(res => res.json())
                        .then(res => this.tableData = res)

                },
                editRecord(id) {
                    this.formShow = !this.formShow
                    fetch("action.php", {
                            "method": "post",
                            "header": {
                                "Content-Type": "application/json; charset=utf"
                            },
                            "body": JSON.stringify({
                                action: 'show',
                                id: id
                            })
                        }).then(res => res.json())
                        .then(res => {
                                this.id = res[0].id,
                                this.name = res[0].name,
                                this.email = res[0].email,
                                this.password = res[0].password,
                                this.address = res[0].address,
                                this.gender = res[0].gender
                        })
                }
            }
        }
    </script>
</body>

</html>
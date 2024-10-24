<!-- ----------------Example 1---------------------- -->
<div x-data="{count : 0}" class="container m-2 p-2 border">
  <h4>Increment value and display value in console</h4>
  <button @click="count++" class="btn btn-success">Add 1</button>
  <span x-text="count"></span>
  <div x-effect="console.log('incremented value :',count)"></div>
</div>
<!-- ------------------------Example 2-------------------- -->
<div x-data="{name :'',message:''}" class="container m-2 p-2 border">
  <h4>enter some text and diplay with hello</h4>
  <input type="text" x-model="name" placeholder="enter your name" class="form-control" />
  <div x-effect="message = name ? 'hello ' + name : ''"></div>
  <p x-text="message"></p>
</div>

<!-- ------------------------Example 3-------------------- -->
 <!-- <div x-data="{value:false}">
    <button x-on:click="value=!value">Change</button>
    <div x-effect="alert(value)"></div>
 </div> -->
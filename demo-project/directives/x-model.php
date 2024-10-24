<!-----------------------Example 1 simple checkbox-------------------------->

<div x-data="{value : 'off' ,text() { this.value = this.value == 'off' ? 'on' : 'off'} }" class="container border p-3 my-2">
  <h4>Exercise 1 : if checked then display on otherwise off</h4>
  <input type="checkbox" x-on:click="text()" class="form-check-input"/>
  <span x-text="value"></span>
</div>

<!------------------Example 2 with checkbox-------------------->
<div x-data="{subject : []}" class="border p-3 my-3">
<h4>Exercise 2 : only checked value display</h4>
  <input type="checkbox" value="php" x-model="subject" class="form-check-input me-2"/>PHP
  <input type="checkbox" value="jquery" x-model="subject" class="form-check-input me-2"/>Jquery
  <input type="checkbox" value="html" x-model="subject" class="form-check-input me-2"/>HTML<br />
  Subjects are : <span x-text="subject"></span>
</div>
<!-----------------Example 3 with checkbox-------------------->
<div x-data="{places : ''}" class="border p-3 my-3">
<h4>Exercise 3 : only selected item display</h4>
  <select x-model="places" class="form-control">
    <option value="" disabled>select place</option>
    <option value="kashmir">Kashmir</option>
    <option value="jaipur">Jaipur</option>
    <option value="goa">Goa</option>
  </select><br />
  selected place: <span x-text="places"></span>
</div>

<!------------------Example 4 change color------------------>

<div x-data="{color : ''}" class="border p-3 my-3">
<h4>Exercise 4 : change color based on selected value</h4>
  <div class="h-50 w-25 border p-3" :class="'bg-' + color" x-text="color"></div>
  <select x-model="color" class="form-control">
    <option value="" disabled>select color</option>
    <option value="primary">primary</option>
    <option value="success">success</option>
    <option value="info">info</option>
    <option value="danger">danger</option>
  </select>
</div>
    <!----------------Example 1-------------------->
    <!-- <div
      x-data="{
        placeholder : 'search..',    
    }"
    >
      <input type="text" x-bind:placeholder="placeholder" :class="class" />
    </div>
    <br /> -->
    <!----------------Example 2 with shorthand syntax-------------------->

    <div class="container border p-3 my-2">
      <h4>Exercise 1 : bind class which change color based on click</h4>
      <div x-data="{isActive : true}">
        <button
          x-on:click="isActive = ! isActive"
          x-bind:class="isActive ? 'btn btn-success btn-sm' : 'btn btn-danger btn-sm' "
          x-text="isActive ? 'disabled' : 'show'"></button>
      </div>
    </div>
    <!----------------Example 3 with shorthand syntax bind attribute-------------------->
    <div class="container border p-3 my-2">
      <h4>Exercise 2 : if checked then button enabled otherwise not</h4>
      <div x-data="{ isDisabled: true }">
        <input type="checkbox" x-on:change="isDisabled = !isDisabled" />
        <label>Enable button</label>

        <button x-bind:disabled="isDisabled" class="mt-2 btn btn-success">Click Me</button>
      </div>
    </div>
    <!------------------Example 4 different events----------------->
    <div class="container border p-3 my-2">
      <h4>Exercise 3 : dynamic event examples</h4>
      <div x-data="{ message : false}">
        <!-- simple alert when enter press -->
        <span>press enter if want to alert</span>
        <input type="text" x-on:keyup.enter="alert('Submitted!')" /><br><br>
        <!-- display message when enter space -->
        <span>enter space if want to message</span>
        <input type="text" x-on:keyup.w="message = !message" />
        <p x-show="message">can't enter space</p>
      </div>
    </div>

   
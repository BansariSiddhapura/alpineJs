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
    <div x-data="{isActive : true}">
      <button
        @click="isActive = ! isActive"
        :class="isActive ? 'btn btn-success btn-sm' : 'btn btn-danger btn-sm' "
        x-text="isActive ? 'disabled' : 'show'"
      ></button>
    </div>
  </div>
    <!----------------Example 3 with shorthand syntax bind attribute-------------------->
    <div class="container border p-3 my-2">
    <div x-data="{ isDisabled: true }">
      <input type="checkbox" @change="isDisabled = !isDisabled" />
      <label>Enable button</label>

      <button :disabled="isDisabled" class="mt-2 btn btn-success">Click Me</button>
    </div>
    </div>
    <!----------------Example 4 light dark theme-------------------->
    <div x-data="{theme:true}">
      <div class="container border p-5" :class="theme ? 'bg-light':'bg-dark'">
        <button
          @click="theme = !theme"
          :class="theme ? 'btn btn-dark' : 'btn btn-light'"
          x-text="theme ? 'dark' : 'light'"
        ></button>
      </div>
    </div>
    <script src="./assets/js/bootstrap.js"></script>
  </body>
</html>
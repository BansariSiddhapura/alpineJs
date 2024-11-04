<div class="container border p-3 my-2">
  <h4>Exercise 1 : Increment / Decrement</h4>
  <div x-data="{count : 1}" class="d-flex justify-content-between">
    <div>
      <button x-on:click="count += 1" class="btn btn-success btn-sm">Increment</button>
      <button @click="count -= 1" class="btn btn-danger btn-sm">Decrement</button>
    </div>
    <span class="fs-4">Value : <span x-text="count"></span></span>
  </div>
</div>
<!-- -------------Example 1-------------------------- -->
<div class="container border p-3 my-2">
  <h4>Exercise 2 : Toggle</h4>
  <div x-data="{show : false , 
            toggle() {this.show = !this.show}
        }">
    <button @click="toggle()" x-text="show ? 'Hide' : 'Show'" class="btn btn-primary btn-sm"></button>
    <div x-show="show" x-transition:enter.duration.1000ms x-transition:leave.duration.2000ms>Toggle Data</div>
  </div>
  <!-----------x-if for compare with x-show--->
  <!-- <div x-data="{show : false , 
            toggle() {this.show = !this.show}
        }">
    <button @click="toggle()" x-text="show ? 'Hide' : 'Show'" class="btn btn-primary btn-sm"></button>
    <template x-if="show" x-transition:enter.duration.1000ms>
      <div>Toggle Data</div>
    </template>
  </div> -->
</div>
<!-- -------------Example 2------------------------- -->
<div class="container border p-3 my-2">
  <h4>Exercise 3 : Toggle with function</h4>
  <div x-data="myData()">
    <button @click="toggle" class="btn btn-primary btn-sm">Toggle Content</button>
    <div x-show="isOpen">Content...</div>
  </div>
</div>
<!-- --------------Example 3------------------------ -->
<div class="container border p-3 my-2">
  <h4>Exercise 4 : Toggle with reusable Data</h4>
  <div x-data="callable">
    <button @click="isToggle" class="btn btn-primary btn-sm">Toggle Content</button>
    <div x-show="isVisible">Content...</div>
  </div>
</div>
<!----------------Example 4------------------ -->
<div x-data="{isCheckDisplay : false}" class="container border p-3 my-2">
  <h4>Exercise 5 : show options if checked</h4>
  <input type="checkbox" @change="isCheckDisplay = !isCheckDisplay" class="form-check-input mx-2" />Show
  <label class="form-check-label">Additional Options</label>

  <div x-show="isCheckDisplay" x-transition:leave.duration.1000ms>
    <label><input type="checkbox" class="form-check-label" />PHP</label>
    <label><input type="checkbox" class="form-check-label" />Jquery</label>
    <label><input type="checkbox" class="form-check-label" />Javascript</label>
  </div>
</div>
<script>
  //function
  function myData() {
    return {
      open: false,
      isOpen() {
        return this.open;
      },
      toggle() {
        this.open = !this.open;
      },
    };
  }

  //reusable data
  //alpine:init is an event that is fired when Alpine is initialized.
  document.addEventListener("alpine:init", () => {
    Alpine.data("callable", () => ({
      isVisible: false,
      isToggle() {
        this.isVisible = !this.isVisible;
      },
    }));
  });
</script>
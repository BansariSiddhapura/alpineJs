  <!-- ------------------calculator------------------ -->
  <div x-data="calculator()" class="row d-flex gap-3">
    <div class="col col-6 border p-3 shadow-sm">
      <span>Simple Calculator</span>
      <div class="my-3">
        <input type="number" x-model="number1">
        <input type="number" x-model="number2">
      </div>
      <div class="my-3">
        <button x-on:click="add()" class="btn btn-success btn-rounded px-3 fs-5">+</button>
        <button x-on:click="sub()" class="btn btn-success btn-rounded px-3 fs-5">-</button>

        <button x-on:click="multi()" class="btn btn-success btn-rounded px-3 fs-5">*</button>
        <button x-on:click="div()" class="btn btn-success btn-rounded px-3 fs-5">/</button>
      </div>
      <span class="fs-3">Result is : <span x-text="result"></span></span>
    </div>
    <div class="col col-4 border p-3 gap-3 shadow-sm">
      <div class="d-flex justify-content-between">
        <span>History</span>
        <button class="text-danger btn btn-rounded" x-on:click="clear()"><i class="fa-solid fa-trash"></i></button>
      </div>
      <template x-for="res in storage">
        <div x-text="res"></div>
      </template>



    </div>
  </div>
  <script>
    function calculator() {
      return {
        number1: '',
        number2: '',
        result: '',
        storage: [],
        add() {
          this.result = parseFloat(this.number1) + parseFloat(this.number2)
          this.storage.push(`${this.number1} + ${this.number2} = ${this.result}`);
        },
        sub() {
          this.result = parseFloat(this.number1) - parseFloat(this.number2)
          this.storage.push(`${this.number1} - ${this.number2} = ${this.result}`);
        },
        multi() {
          this.result = parseFloat(this.number1) * parseFloat(this.number2)
          this.storage.push(`${this.number1} * ${this.number2} = ${this.result}`);
        },
        div() {
          if (this.number2 == 0) {
            this.result = "can't division by 0"
          } else {
            this.result = parseFloat(this.number1) / parseFloat(this.number2)
            this.storage.push(`${this.number1} / ${this.number2} = ${this.result}`);
          }
        },
        clear() {
          this.storage = [];
          this.number1 = '';
          this.number2 = '';
          this.result = '';
        }
      }
    }
  </script>
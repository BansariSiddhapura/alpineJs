<!-- --------------------Example 1--------------------------- -->
<div class="container border p-3 my-2">
  <h4>Exercise 1 :Simple for loop</h4>
  <div
    x-data="{person:[
                {id:1,name:'john'},
                {id:2,name:'doe'}
              ]}">
    <template x-for="p in person">
      <p x-text="p.name"></p>
    </template>
  </div>
</div>
<!------------------------Example 2-------------------------->
<div class="container border p-3 my-2">
  <h4>Exercise 2 :Simple for loop with index</h4>
  <div x-data="{ items: ['Apple', 'Banana', 'Cherry'] }">
    <h5>Fruit List</h5>
    <ul>
      <template x-for="(item,index) in items">
        <li>
          <span x-text="index"></span>
          <span x-text="item"></span>
        </li>
      </template>

    </ul>
    <h4>Exercise 3 :Simple for loop with append some message</h4>
    <template x-for="fruit in items">
      <p>
        <span>The next fruit is </span><span x-text="fruit">
      </p>
    </template>
  </div>
  <ul>
    <!-- <template x-for="i in 10">
            <li x-text="i"></li>
        </template> -->
  </ul>
</div>
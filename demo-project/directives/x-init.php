<div
  x-data="{person:[]}"
  x-init="person = await((await fetch('https://jsonplaceholder.typicode.com/posts')).json())"
>
  <div x-text="console.log(person)"></div>
  <h1 class="d-flex justify-content-center">Demo of x-init and x-for</h1>
  <table class="table table-striped table-bordered container">
    <thead>
      <th>user id</th>
      <th>id</th>
      <th>title</th>
      <th>description</th>
    </thead>

    <tbody>
      <template x-for="p in person">
        <tr>
          <td x-text="p.userId"></td>
          <td x-text="p.id"></td>
          <td x-text="p.title"></td>
          <td x-text="p.body"></td>
        </tr>
      </template>
    </tbody>
  </table>
</div>

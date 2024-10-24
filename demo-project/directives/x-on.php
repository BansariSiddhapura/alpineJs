<!-- custom Event -->
<div x-data @foo="alert('Button Was Clicked!')" class="mt-3">
  <button
    @click="$event.target.dispatchEvent(new CustomEvent('foo', { bubbles: true }))">
    custom event
  </button>

</div>
<!-- prevent default action of form -->
<div x-data>
  <form @submit.prevent="console.log('submitted')" action="/foo">
    <button>Submit</button>
  </form>
</div>
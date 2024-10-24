<div x-data="{question : null}">
    <div x-on:click="question = 1">What is x-if?</div>
    <template x-if="question == 1">
            <span>x-if is used for toggling elements on the page, similarly to x-show, however it completely adds and removes the element it's applied to rather than just changing its CSS display property to "none".</span>
    </template>
    <div x-on:click="question = 2">what is x-model?</div>
    <template x-if="question == 2">
            <span>x-model allows you to bind the value of an input element to Alpine data.</span>
    </template>
</div>
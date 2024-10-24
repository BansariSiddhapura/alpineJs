<div class="container border p-3 my-2">
    <h4>Exercise : enter a text and display output inside below area</h4>
    <div x-data="{ userInput: '' }">
        <h1>Dynamic HTML Renderer</h1>

        <textarea
            x-model="userInput"
            rows="5"
            cols="50"
            placeholder="Enter your HTML here..."></textarea>
        <h5>Output:</h5>
        <div class="mt-2">
            <span>x-html:<div x-html="userInput" class="border p-2 my-2"></div></span>
            <span>x-text:<div x-text="userInput" class="border p-2"></div></span>
        </div>
    </div>
</div>
<div x-data="{ open: false }">
    <button @click="open = ! open" class="btn btn-success">Toggle Modal</button>
 
    <template x-teleport="body">
        <div x-show="open">
            Modal contents...
 
            <div x-data="{ open: false }">
                <button @click="open = ! open" class="btn btn-warning">Toggle Nested Modal</button>
 
                <template x-teleport="body">
                    <div x-show="open">
                        Nested modal contents...
                    </div>
                </template>
            </div>
        </div>
    </template>
</div>
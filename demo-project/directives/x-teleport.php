<div x-data="{ open: false }">
    <button @click="open = ! open" class="btn btn-success">Toggle Modal</button>

    <template x-teleport="#display">
        <div>
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
                inside_body
            </div>
            Outside_body
        </div>
    </template>
    <div class="bg-primary">
        <div id="display">
            <span>header</span>

        </div>
    </div>

</div>
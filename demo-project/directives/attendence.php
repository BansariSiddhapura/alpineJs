<div x-data="details()">
    <div class="d-flex justify-content-between py-3">
        <div>
            <span class="fs-2">Attendence system</span>
        </div>

        <div class="d-flex gap-2">
            <input type="date" class="form-control" x-on:change="clear()" x-model="date">
            <button class="btn btn-success w-75" x-on:click="allDisplay = !allDisplay">Show all Data</button>
        </div> 
    </div>
    <table class="table table-bordered table-striped" :class="theme ? '' : 'table-dark'">
        <thead>
            <th>Name</th>
            <th>Role</th>
            <th class="d-flex justify-content-between"><span>Absent / Present </span>
                <button class="btn btn-primary btn-sm" x-on:click="showAll()">Save</button>
            </th>
        </thead>
        <tbody>
            <template x-for="all in students" :key="all.name">
                <tr>
                    <td x-text="all.name"></td>
                    <td x-text="all.role"></td>
                    <td><input type="checkbox" class="form-check-input" x-on:change="checkAttendece()" x-model="all.check"></td>
                </tr>
            </template>
        </tbody>

    </table>
    <div class="container border rounded-3 p-4 gap-3" x-transition:enter.duration.1000ms>
        <span>Date :<span x-text="date"></span></span>
        <div>
            <span x-html="title1"> </span>
            <span x-text="present"></span>
        </div>
        <div>
            <span x-html="title2"></span>
            <span x-text="absent"></span>
        </div>
    </div>
    <div x-show="allDisplay" class="container border rounded-3 p-4 gap-3 my-3" x-transition:enter.duration.1000ms>
        <table class="table table-bordered">
            <thead>
                <th>Date</th>
                <th>Present Name</th>
                <th>Absent Name</th>
            </thead>
            <tbody>
                <template x-for="data in allDetailsStore" :key="data.date">
                    <tr>
                        <td x-text="data.date"></td>
                        <td x-text="data.present"></td>
                        <td x-text="data.absent"></td>
                    </tr>
                </template>
            </tbody>

        </table>
    </div>




</div>
<script>
    function details() {
        return {
            title1: '<b>Present Names : </b>',
            title2: '<b>Absent Names : </b>',
            present: [],
            absent: [],
            result: false,
            allDisplay: false,
            date: '',
            allDetailsStore: [],
            students: [{
                    name: 'disha',
                    role: 'full-stack developer',
                    check: ''
                },
                {
                    name: 'avni',
                    role: 'UI UX designer',
                    check: ''
                },
                {
                    name: 'bansari',
                    role: 'intern',
                    check: ''
                },
                {
                    name: 'prarthna',
                    role: 'intern',
                    check: ''
                },
                {
                    name: 'jayshih',
                    role: 'full-stack developer',
                    check: ''
                },
                {
                    name: 'jay',
                    role: 'front-end developer',
                    check: ''
                },
                {
                    name: 'vatsal',
                    role: 'full-stack developer',
                    check: ''
                },
                {
                    name: 'yuvraj',
                    role: 'intern',
                    check: ''
                },
                {
                    name: 'hardik',
                    role: 'full-stack developer',
                    check: ''
                }

            ],

            checkAttendece() {
                this.present = [];
                this.absent = [];
                this.students.forEach(status => {
                    if (status.check == true) {
                        this.present.push(status.name)
                    } else {
                        this.absent.push(status.name)
                    }
                });
            },

            showAll() {
                if (this.date) {
                  
                    students = {
                        'date': this.date,
                        'present': this.present,
                        'absent': this.absent
                    }
                    this.allDetailsStore.push(students)
                    //console.log(this.allDetailsStore);
                    
                }
                this.clear()
            },

            clear() {
                this.students.forEach(status => {
                    status.check = false;
                })
              
                
              
               
            }
        }

    }
</script>
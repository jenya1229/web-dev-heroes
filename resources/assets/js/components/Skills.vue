<template>
    <div>
        <form class="form-inline">
            <div class="col-md-4">
                <input type="text" class="form-control" v-model="input">
                <button type="button" class="btn btn-primary" @click="add">add</button>
            </div>
        </form>
        <div class="col-md-4">
            <span class="badge badge-primary" v-for="skill in skills">
                {{skill.name}}
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                input: '',
                skills: [],
            }
        },
        mounted: function () {
            this.init();
        },
        methods: {
            init() {
                let vm = this;
                axios.get('/skills/list')
                    .then(function (response) {
                        vm.skills = response.data;
                    })
            },
            add: function () {
                if(this.input){
                    let vm = this;
                    axios.post('/skills', {name: this.input})
                        .then(function (response) {
                            let skill = response.data;
                            vm.skills.push({
                                id: skill.id,
                                name: skill.name
                            });
                            vm.input = '';
                        });
                }
            }
        }
    }
</script>


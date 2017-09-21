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
                input: ''
            }
        },
        computed: {
            skills() {
                return [
                    {id: 1, name: 'php'},
                    {id: 2, name: 'laravel'},
                    {id: 3, name: 'javascript'},
                    {id: 4, name: 'vue'},
                ]; },
        },
        mounted: {
            list() {
                console.log('axios');
                axios.get('/skills/list')
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        },
        methods: {
            add: function () {
                if(this.input){
                    this.skills.push({
                        id: this.skills.length,
                        name: this.input
                    });
                    this.input = '';
                }
            }
        }
    }
</script>


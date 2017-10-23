<template>
    <div>
        <form class="inline">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" v-model="search" @keydown.enter.prevent>
                    <div class="list-group skill-list" v-for="item in searchList">
                        <button type="button" class="list-group-item list-group-item-action" @click="add(item)">{{ item }}</button>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-success" @click="save">Save</button>
                </div>
            </div>
        </form>
        <div class="col-md d-inline-flex">
            <div class="skill" v-for="item in choosed">
                <span class="badge badge-secondary" >
                    {{ item }}
                </span>
                <button type="button" class="close" aria-label="Close" @click="remove(item)">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                search: 'p',
                choosed: ['1'],
            }
        },
        computed: {
            skills() {
                return ['php', 'laravel', 'javascript', 'vue'];
            },
            searchList() {
                if (this.search.length < 1) return;
                return this.skills.filter(item => item.toLowerCase().includes(this.search.toLowerCase()));
            }
        },
        methods: {
            add: function (item) {
                this.choosed.push(item);
                let index = this.skills.indexOf(item);
                if (index > -1) {
                    this.skills.splice(index, 1);
                }
                this.search = '';
            },
            remove: function (item) {
                this.skills.push(item);
                let index = this.chosed.indexOf(item);
                if (index > -1) {
                    this.choosed.splice(index, 1);
                }
            },
            save: function () {
                // this.choosed отправляем через axios post на profile/edit/skills
            }
        }
    }
</script>

<style>
    span {
        margin-right: 5px;
    }

    .skill {
        margin-right: 10px;
    }
</style>
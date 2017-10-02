<template>
    <div>
        <p>{{text.short()}}</p>
    </div>
</template>

<script>
    export default {
        props: ['text'],
        data() {
            return {
                text: ''
            }
        },
        computed: {
            text: function () {
                return this.short();
            }
        },
        methods: {
            short() {
                return this.cut(100, this.text);
            },
            cut(n, text) {
                let short = text.substr(0, n);
                if (/^\S/.test(text.substr(n)))
                    return short.replace(/\s+\S*$/, "");
                return short;
            }
        }
    }
</script>


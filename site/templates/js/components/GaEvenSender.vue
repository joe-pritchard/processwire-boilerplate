<template>
    <span></span>
</template>

<script type="text/babel">
    export default {
        name: "ga-event-sender",
        props: {
            category: {
                type: String,
                required: true
            },
            action: {
                type: String,
                required: true
            },
            label: {
                type: String,
                required: true
            },
            value: {
                type: Number,
                required: false
            },
        },
        data() {
            return {}
        },
        created() {
          if (typeof(window.ga) === 'undefined') {
                window.ga = () {}
            }
        },
        mounted() {
            this.gaSendEvent(this.category, this.action, this.label, this.value);
        },
        methods: {
            gaSendEvent(category, action, label, value) {
                if (typeof(value) !== 'undefined') {
                    window.ga('send', 'event', category, action, label, value);
                } else {
                    window.ga('send', 'event', category, action, label);
                }
            }
        }
    }
</script>

<style scoped>

</style>

require('./bootstrap');

Vue.component('ga-event-sender', require('./components/GaEventSender.vue'));

const app = new Vue({
    el: '#app',
    data: {
        navOpen: false
    },
    methods: {
        mounted() {
            if (typeof(ga === 'undefined')) {
                window.ga = () => {
                    console.error('No Google Analytics was detected');
                }
            }
        },
        gaSendEvent(category, action, label, value) {
            if (typeof(category) !== 'undefined' && typeof(action) !== 'undefined') {
                if (typeof(value) !== 'undefined') {
                    ga('send', 'event', category, action, label, value);
                } else {
                    ga('send', 'event', category, action, label);
                }
            }
        }
    }
});

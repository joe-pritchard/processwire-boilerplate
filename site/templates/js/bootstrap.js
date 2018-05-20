// import our libraries and stuff we need everywhere
window._      = require('lodash');
window.Popper = require('popper.js').default;
window.axios  = require('axios');
window.Vue    = require('vue');

// import vue cookie to give us access to this.$cookie inside our components
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
var VueCookie = require('vue-cookie');
Vue.use(VueCookie);

// initialise LogRocket if you need it. Make sure to add your app id to the init call
// window.LogRocket = require('logrocket');
// window.LogRocket.init('logrocket app');

// this lets us add the logrocket session url to the sentry error report
// window.Raven.setDataCallback(function (data) {
//     data.extra.sessionURL = LogRocket.sessionURL;
//     return data;
// });

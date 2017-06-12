<<<<<<< HEAD

=======
>>>>>>> master
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
<<<<<<< HEAD

window.Vue = require('vue');

=======
require('quasar-framework/dist/quasar.mat.css');

import Quasar from 'quasar-framework';

window.Vue = require('vue');

Vue.use(Quasar);

>>>>>>> master
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

<<<<<<< HEAD
Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});
=======
Vue.component('app', require('./components/app.vue'));

const app = new Vue({
    el: '#app'
});
>>>>>>> master

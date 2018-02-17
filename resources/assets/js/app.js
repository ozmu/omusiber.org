
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('home', require('./components/Site/Home.vue'));
Vue.component('contact', require('./components/Site/Contact.vue'));
Vue.component('messages', require('./components/Admin/Messages.vue'));
Vue.component('about-us', require('./components/Admin/AboutUs.vue'));
Vue.component('about', require('./components/Site/About.vue'));
Vue.component('projects', require('./components/Admin/Projects.vue'));
Vue.component('activities', require('./components/Admin/Activities.vue'));
Vue.component('gallery', require('./components/Admin/Gallery.vue'));
Vue.component('members', require('./components/Admin/Members.vue'));
Vue.component('categories', require('./components/Admin/Categories.vue'));
Vue.component('site-projects',require('./components/Site/Projects.vue'));
Vue.component('site-activities',require('./components/Site/Activities.vue'));
Vue.component('site-gallery',require('./components/Site/Gallery.vue'));
Vue.component('docs',require('./components/Docs/Index.vue'));
Vue.component('about',require('./components/Site/About.vue'));
Vue.component('team',require('./components/Admin/Team.vue'));
Vue.component('ctf',require('./components/Site/Ctf.vue'));

const app = new Vue({
    el: '#home'
});
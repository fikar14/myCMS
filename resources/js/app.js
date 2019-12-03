require('./bootstrap');
require('./admin-menu');
require('./home');
require('@fortawesome/fontawesome-free');
require('@fortawesome/fontawesome-free-solid');
require('@fortawesome/fontawesome-free-regular');
require('@fortawesome/fontawesome-free-brands');
require('@ckeditor/ckeditor5-build-classic');

window.Vue = require('vue');
window.Slug = require('slug');
Slug.defaults.mode = "rfc3986";

import Buefy from 'buefy';
Vue.use(Buefy);

import CKEditor from '@ckeditor/ckeditor5-vue';
Vue.use( CKEditor );


Vue.component('slug-widget', require('./components/Slug-widget.vue').default);
Vue.component('slug-category', require('./components/Slug-category.vue').default);
Vue.component('role-create', require('./components/Role-create.vue').default);
Vue.component('profile-page', require('./components/forms/Profile-page.vue').default);
Vue.component('blog-post', require('./components/forms/Blog-post.vue').default);

/**
* Vue Router
*
* @link http://router.vuejs.org/en/installation.html
*/
// import Vue from 'vue'
// import VueRouter from 'vue-router';
// Vue.use(VueRouter);

// const app = new Vue({
//     el: '#app'
// });

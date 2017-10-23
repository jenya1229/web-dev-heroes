
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('skills', require('./components/Skills.vue'));
Vue.component('description', require('./components/Description.vue'));
Vue.component('skills_edit', require('./components/SkillsEdit.vue'));

const app = new Vue({
    el: '#app'
});

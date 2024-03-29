
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');
/*import ExampleComponent from  './components/AttributeComponent.vue';*/

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/AttributeComponent.vue -> <example-component></example-component>
 */

Vue.component('attribute-component', require('./components/AttributeComponent.vue').default);
/*Vue.component('article-component', require('./components/ArticleComponent.vue').default);
Vue.component('book-component', require('./components/BookComponent.vue').default);
Vue.component('select-city-component', require('./components/SelectCityComponent.vue').default);*/


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

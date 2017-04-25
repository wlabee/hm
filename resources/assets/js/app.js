
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

// const app = new Vue({
//     el: '#app'
// });
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'
import App from './App.vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'

Vue.use(ElementUI);

Vue.use(VueRouter)

Vue.use(VueResource)

/* eslint-disable no-new */

var router = new VueRouter({
    history: true,
    root: 'dashboard'
})
const app = new Vue({
    el: '#app'
});

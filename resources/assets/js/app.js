
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

// const app = new Vue({
//     el: '#app'
// });
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'
import App from './components/App.vue'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import routes from './routes.js';

Vue.use(ElementUI);

Vue.use(VueRouter)

Vue.use(VueResource)

/* eslint-disable no-new */

var router = new VueRouter({
    history: true,
    routes: routes
})

// router.beforeEach((to, from, next) => {

//     if (!window.User) {
//         return next('/admin/login')
//     }
//     var url = '/admin/checkAcl', path =to.path;
//     Vue.http({url:url,method:'GET',params:{path:path}})
//         .then(response => {
//             var responseJson = response.data;

//             if(!responseJson.status){
//                 return next({ path: '/admin/error' });
//             }

//         }, response => {
//             return next({ path: '/admin/login' });
//         });
//     //to.callHttp("POST",url,{path:path}, function (json) {
//     //
//     //
//     //});
//     return next();
// })


const app = new Vue({
    router,
    el: '#app',
    render: h => h(App)
}).$mount('#app')

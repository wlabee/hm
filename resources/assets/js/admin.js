
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
import 'admin-lte/dist/css/AdminLTE.min.css'
import 'datatables.net-bs/css/dataTables.bootstrap.css'
// import 'jquery-ui/themes/base/all.css'

Vue.use(ElementUI);

const adminapp = new Vue({
    el: '#adminapp',
    data: {
        datatimex:''
    }
});
$(function () {
    $("li.el-menu-item").on('click', function(){
        if ($(this).has('a')) {
            window.location.href = $(this).children('a').attr('href');
        }
    });
});

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
Vue.component('ptable', require('./components/Ptable.vue'));

// const app = new Vue({
//     el: '#app'
// });
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-default/index.css'

Vue.use(ElementUI);

const adminapp = new Vue({
    el: '#adminapp'
    // data : {
    //       tableData: [{
    //         name: '王小虎',
    //         display_name: 'dsdsd',
    //         description: 'dsdwdwewgerger',
    //         created_at: '2016-05-02',
    //         updated_at: '2016-05-02',
    //         operate: '操作'
    //       },
    //       {
    //         name: '王小虎',
    //         display_name: 'dsdsd',
    //         description: 'dsdwdwewgerger',
    //         created_at: '2016-05-02',
    //         updated_at: '2016-05-02',
    //         operate: '操作'
    //       }]
    //   }
});

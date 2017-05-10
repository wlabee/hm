/**
 * 
 */
import Index from './components/Index.vue'
import Parent from './components/layouts/Parent.vue'
import App from './components/App.vue'

export default [
    {
        path: '/',
        component: Index,
        children: [
            {
                path: 'test',
                name: '测试',
                component: Parent,
                children: [
                    {
                        path: 'index',
                        name: '测试测试',
                        component: require('./components/Example.vue')
                    }

                ]
            },
            // {
            //     path: 'login',
            //     name: '登录',
            //     component: require('./components/login.vue')
            // }
        ]
    }
]



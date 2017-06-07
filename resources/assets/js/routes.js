/**
 * 
 */
import Index from './components/Index.vue'
import Parent from './components/layouts/Parent.vue'
import App from './components/App.vue'

import Selection from './components/page/Selection.vue'
import Hearsay from './components/page/Hearsay.vue'
import Promotion from './components/page/Promotion.vue'
import Lowprice from './components/page/Lowprice.vue'
import Category from './components/page/Category.vue'

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
    },
    {
        path: '/selection',
        name: '小编精选',
        component: Selection
    },
    {
        path: '/hearsay',
        name: '小道消息',
        component: Hearsay
    },
    {
        path: '/promotion',
        name: '促销精选',
        component: Promotion
    },
    {
        path: '/lowprice',
        name: '神价屋',
        component: Lowprice
    },
    {
        path: '/cate/:cid',
        name: '类目产品',
        component: Category
    }
]



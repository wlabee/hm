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
                component: Parent,
                name: '测试',
                children: [
                    {
                        path: 'index',
                        name: '测试测试',
                        component: require('./components/Example.vue')
                    }

                ]
            },
            // {
            //     path: 'role',
            //     component: Parent,
            //     name: '角色管理',
            //     children: [
            //         {
            //             path: 'index',
            //             name: '角色列表',
            //             component: require('./views/admin/role/Index.vue')
            //         },
            //         {
            //             path: 'create',
            //             name: '添加角色',
            //             component: require('./views/admin/role/Create.vue')
            //         },
            //         {
            //             path: 'update/:id',
            //             name: '编辑角色',
            //             component: require('./views/admin/role/Update.vue')
            //         },
            //         {
            //             path: 'setacl/:id',
            //             name: '设置权限',
            //             component: require('./views/admin/role/Acl.vue')
            //         }
            //     ]
            // },
            // {
            //     path: '*',
            //     redirect: '/'
            // }
        ]
    }
]



<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 5,
                'name' => 'admin.user.manage',
                'display_name' => '用户管理',
                'description' => 's',
                'created_at' => '2016-05-27 09:14:31',
                'updated_at' => '2017-03-30 02:15:50',
                'cid' => 0,
                'icon' => NULL,
            ),
            1 => 
            array (
                'id' => 6,
                'name' => 'admin.permission.index',
                'display_name' => '权限列表',
                'description' => '',
                'created_at' => '2016-05-27 09:15:01',
                'updated_at' => '2016-05-28 04:35:05',
                'cid' => 5,
                'icon' => NULL,
            ),
            2 => 
            array (
                'id' => 7,
                'name' => 'admin.permission.create',
                'display_name' => '添加权限',
                'description' => '',
                'created_at' => '2016-05-27 09:15:22',
                'updated_at' => '2016-05-27 09:15:22',
                'cid' => 5,
                'icon' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'admin.permission.edit',
                'display_name' => '修改权限',
                'description' => '',
                'created_at' => '2016-05-27 09:15:34',
                'updated_at' => '2016-05-27 09:15:34',
                'cid' => 5,
                'icon' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'admin.permission.destroy ',
                'display_name' => '删除权限',
                'description' => '',
                'created_at' => '2016-05-27 09:15:56',
                'updated_at' => '2016-05-27 09:15:56',
                'cid' => 5,
                'icon' => NULL,
            ),
            5 => 
            array (
                'id' => 11,
                'name' => 'admin.user.index',
                'display_name' => '用户列表',
                'description' => NULL,
                'created_at' => '2016-05-27 10:55:55',
                'updated_at' => '2017-03-29 03:19:48',
                'cid' => 5,
                'icon' => NULL,
            ),
            6 => 
            array (
                'id' => 12,
                'name' => 'admin.user.create',
                'display_name' => '添加用户',
                'description' => '',
                'created_at' => '2016-05-27 10:56:10',
                'updated_at' => '2016-05-27 10:56:10',
                'cid' => 5,
                'icon' => NULL,
            ),
            7 => 
            array (
                'id' => 13,
                'name' => 'admin.user.edit',
                'display_name' => '编辑用户',
                'description' => '',
                'created_at' => '2016-05-27 10:56:26',
                'updated_at' => '2016-05-27 10:56:26',
                'cid' => 5,
                'icon' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'name' => 'admin.user.destroy',
                'display_name' => '删除用户',
                'description' => '',
                'created_at' => '2016-05-27 10:56:44',
                'updated_at' => '2016-05-27 10:56:44',
                'cid' => 5,
                'icon' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'name' => 'admin.role.index',
                'display_name' => '角色列表',
                'description' => '',
                'created_at' => '2016-05-27 10:57:35',
                'updated_at' => '2016-05-27 10:57:35',
                'cid' => 5,
                'icon' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'name' => 'admin.role.create',
                'display_name' => '添加角色',
                'description' => '',
                'created_at' => '2016-05-27 10:57:53',
                'updated_at' => '2016-05-27 10:57:53',
                'cid' => 5,
                'icon' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'name' => 'admin.role.edit',
                'display_name' => '编辑角色',
                'description' => '',
                'created_at' => '2016-05-27 10:58:13',
                'updated_at' => '2016-05-27 10:58:13',
                'cid' => 5,
                'icon' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'name' => 'admin.role.destroy',
                'display_name' => '删除角色',
                'description' => '',
                'created_at' => '2016-05-27 10:58:48',
                'updated_at' => '2016-05-27 10:58:48',
                'cid' => 5,
                'icon' => NULL,
            ),
            13 => 
            array (
                'id' => 21,
                'name' => 'admin.slider.index',
                'display_name' => '轮播图列表',
                'description' => NULL,
                'created_at' => '2017-04-11 08:17:14',
                'updated_at' => '2017-04-11 08:17:14',
                'cid' => 20,
                'icon' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'name' => 'admin.config.manage',
                'display_name' => '网站配置',
                'description' => '网站相关的配置',
                'created_at' => '2017-04-11 08:13:52',
                'updated_at' => '2017-04-12 08:39:25',
                'cid' => 0,
                'icon' => NULL,
            ),
            15 => 
            array (
                'id' => 22,
                'name' => 'admin.slider.create',
                'display_name' => '添加轮播图',
                'description' => NULL,
                'created_at' => '2017-04-11 08:48:21',
                'updated_at' => '2017-04-11 08:48:21',
                'cid' => 20,
                'icon' => NULL,
            ),
            16 => 
            array (
                'id' => 23,
                'name' => 'admin.slider.edit',
                'display_name' => '编辑轮播图',
                'description' => NULL,
                'created_at' => '2017-04-11 08:48:50',
                'updated_at' => '2017-04-11 08:48:50',
                'cid' => 20,
                'icon' => NULL,
            ),
            17 => 
            array (
                'id' => 24,
                'name' => 'admin.slider.destroy',
                'display_name' => '删除轮播图',
                'description' => NULL,
                'created_at' => '2017-04-11 08:49:39',
                'updated_at' => '2017-04-11 08:49:39',
                'cid' => 20,
                'icon' => NULL,
            ),
            18 => 
            array (
                'id' => 25,
                'name' => 'admin.category.index',
                'display_name' => '分类列表',
                'description' => NULL,
                'created_at' => '2017-04-24 07:53:53',
                'updated_at' => '2017-04-24 07:53:53',
                'cid' => 20,
                'icon' => NULL,
            ),
            19 => 
            array (
                'id' => 26,
                'name' => 'admin.category.create',
                'display_name' => '分类创建',
                'description' => NULL,
                'created_at' => '2017-04-24 07:54:12',
                'updated_at' => '2017-04-24 07:54:12',
                'cid' => 20,
                'icon' => NULL,
            ),
            20 => 
            array (
                'id' => 27,
                'name' => 'admin.category.edit',
                'display_name' => '分类修改',
                'description' => NULL,
                'created_at' => '2017-04-24 07:54:36',
                'updated_at' => '2017-04-24 07:54:36',
                'cid' => 20,
                'icon' => NULL,
            ),
            21 => 
            array (
                'id' => 28,
                'name' => 'admin.category.destroy',
                'display_name' => '分类删除',
                'description' => NULL,
                'created_at' => '2017-04-24 07:54:49',
                'updated_at' => '2017-04-24 07:54:49',
                'cid' => 20,
                'icon' => NULL,
            ),
            22 => 
            array (
                'id' => 29,
                'name' => 'admin.frlink.index',
                'display_name' => '友情链接',
                'description' => NULL,
                'created_at' => '2017-05-03 02:56:25',
                'updated_at' => '2017-05-03 02:56:25',
                'cid' => 20,
                'icon' => NULL,
            ),
            23 => 
            array (
                'id' => 30,
                'name' => 'admin.frlink.create',
                'display_name' => '添加链接',
                'description' => NULL,
                'created_at' => '2017-05-03 02:56:58',
                'updated_at' => '2017-05-03 02:56:58',
                'cid' => 20,
                'icon' => NULL,
            ),
            24 => 
            array (
                'id' => 31,
                'name' => 'admin.frlink.edit',
                'display_name' => '编辑链接',
                'description' => NULL,
                'created_at' => '2017-05-03 02:57:16',
                'updated_at' => '2017-05-03 02:57:16',
                'cid' => 20,
                'icon' => NULL,
            ),
            25 => 
            array (
                'id' => 32,
                'name' => 'admin.frlink.destroy',
                'display_name' => '删除链接',
                'description' => NULL,
                'created_at' => '2017-05-03 02:57:34',
                'updated_at' => '2017-05-03 02:57:34',
                'cid' => 20,
                'icon' => NULL,
            ),
            26 => 
            array (
                'id' => 34,
                'name' => 'admin.hotword.index',
                'display_name' => '搜索热词',
                'description' => NULL,
                'created_at' => '2017-05-22 02:47:19',
                'updated_at' => '2017-05-22 02:47:19',
                'cid' => 20,
                'icon' => NULL,
            ),
            27 => 
            array (
                'id' => 35,
                'name' => 'admin.hotword.create',
                'display_name' => '添加热词',
                'description' => NULL,
                'created_at' => '2017-05-22 02:47:48',
                'updated_at' => '2017-05-22 02:47:48',
                'cid' => 20,
                'icon' => NULL,
            ),
            28 => 
            array (
                'id' => 36,
                'name' => 'admin.hotword.edit',
                'display_name' => '编辑热词',
                'description' => NULL,
                'created_at' => '2017-05-22 02:48:08',
                'updated_at' => '2017-05-22 02:48:08',
                'cid' => 20,
                'icon' => NULL,
            ),
            29 => 
            array (
                'id' => 37,
                'name' => 'admin.hotword.destroy',
                'display_name' => '删除热词',
                'description' => NULL,
                'created_at' => '2017-05-22 02:48:31',
                'updated_at' => '2017-05-22 02:48:31',
                'cid' => 20,
                'icon' => NULL,
            ),
        ));
        
        
    }
}
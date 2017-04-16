<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin', function () {
    return redirect('/admin/index');
});
Route::get('admin/index', ['as' => 'admin.index', 'middleware' => ['auth.admin','menu'], 'uses'=>'Admin\\IndexController@index']);

Route::group(['namespace' => 'Admin','prefix' => '/admin',], function () {
    // Route::auth();
    Route::get('login', ['as' => 'admin.login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'admin.login', 'uses' => 'Auth\LoginController@login']);
    Route::get('logout', ['as' => 'admin.logout', 'uses' => 'Auth\LoginController@logout']);
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth.admin','menu']], function () {
    //权限管理路由
    Route::get('permission/{cid}/create', ['as' => 'admin.permission.create', 'uses' => 'PermissionController@create']);
    Route::get('permission/{cid?}', ['as' => 'admin.permission.index', 'uses' => 'PermissionController@index']);
    Route::post('permission/index', ['as' => 'admin.permission.index', 'uses' => 'PermissionController@index']); //查询

    Route::resource('permission', 'PermissionController', ['names' => 
    [
        'create'    => 'admin.permission.create',
        'index'     => 'admin.permission.index',
        'edit'      => 'admin.permission.edit',
        'destroy'   => 'admin.permission.destroy'
    ]
    ]);
    Route::put('permission/update', ['as' => 'admin.permission.edit', 'uses' => 'PermissionController@update']); //修改
    Route::post('permission/store', ['as' => 'admin.permission.create', 'uses' => 'PermissionController@store']); //添加


    //角色管理路由
    Route::get('role/index', ['as' => 'admin.role.index', 'uses' => 'RoleController@index']);
    Route::post('role/index', ['as' => 'admin.role.index', 'uses' => 'RoleController@index']);
    Route::resource('role', 'RoleController', ['names' => 
    [
        'create'    => 'admin.role.create',
        'index'     => 'admin.role.index',
        'edit'      => 'admin.role.edit',
        'destroy'   => 'admin.role.destroy'
    ]
    ]);
    Route::post('role/update', ['as' => 'admin.role.edit', 'uses' => 'RoleController@update']); //修改
    Route::post('role/store', ['as' => 'admin.role.create', 'uses' => 'RoleController@store']); //添加


    //用户管理路由
    Route::match(['get', 'post'], 'user/index', ['as' => 'admin.user.index', 'uses' => 'UserController@index']);
    Route::resource('user', 'UserController', ['names' => 
    [
        'create'    => 'admin.user.create',
        'index'     => 'admin.user.index',
        'edit'      => 'admin.user.edit',
        'destroy'   => 'admin.user.destroy'
    ]
    ]);
    Route::post('user/update', ['as' => 'admin.user.edit', 'uses' => 'UserController@update']); //修改
    // Route::post('user/index', ['as' => 'admin.user.index', 'uses' => 'UserController@index']);
    Route::post('user/store', ['as' => 'admin.user.create', 'uses' => 'UserController@store']); //添加

    Route::get('user/manage', ['as' => 'admin.user.manage', 'uses' => 'UserController@index']);  //用户管理

////////
    Route::get('config/manage', ['as' => 'admin.config.manage', 'uses' => 'SliderController@index']);  //配置管理
    //slider配置管理路由
    Route::match(['get', 'post'], 'slider/index', ['as' => 'admin.slider.index', 'uses' => 'SliderController@index']);
    Route::resource('slider', 'SliderController', ['names' => 
        [
            'create'    => 'admin.slider.create',
            'index'     => 'admin.slider.index',
            'edit'      => 'admin.slider.edit',
            'store'     => 'admin.slider.create',
            'update'    => 'admin.slider.edit',
            'destroy'   => 'admin.slider.destroy'
        ]
    ]);

    //category配置管理路由
    Route::match(['get', 'post'], 'slider/category', ['as' => 'admin.category.index', 'uses' => 'CategoryController@index']);
    Route::resource('category', 'CategoryController', ['names' => 
        [
            'create'    => 'admin.category.create',
            'index'     => 'admin.category.index',
            'edit'      => 'admin.category.edit',
            'store'     => 'admin.category.create',
            'update'    => 'admin.category.edit',
            'destroy'   => 'admin.category.destroy'
        ]
    ]);

});
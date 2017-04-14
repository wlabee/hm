<?php

namespace App\Http\Middleware;

use Closure;
use Auth,Cache,Route;
class GetMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        view()->share('comData',$this->getMenu());
        return $next($request);
    }

    /**
     * 获取左边菜单栏
     * @return array
     */
    function getMenu()
    {
        $open = 0;
        $active = 0;
        $data = [];
        $data['top']=[];
        //查找并拼接出地址的别名值
        $path_arr = explode('/', \URL::getRequest()->path());
        // var_dump($_SERVER);exit;
        // var_dump(Route::currentRouteName());exit;
        // Cache::store('file')->forget('perms');//清理缓存
        // Cache::store('file')->forget('menus');//清理缓存

        if (isset($path_arr[1])) {
            $urlPath = $path_arr[0] . '.' . $path_arr[1] . '.index';
        } else {
            $urlPath = $path_arr[0] . '.index';
        }
        //查找出所有的地址
        $table = Cache::store('file')->rememberForever('menus',function(){
            return \App\Models\Permission::where('name', 'LIKE', '%index')
                ->orWhere('cid', '==', 0)
                ->get();

        });
        foreach ($table as $v) {
            if ($v->cid == 0 || Auth::guard('admin')->user()->can($v->name)) {

                if ($v->name == $urlPath) {
                    $open = $v->cid;
                    $active = $v->id;
                }

                $data[$v->cid][] = $v->toarray();
            }
        }

        foreach ($data[0] as $v){
            if(isset($data[$v['id']]) && is_array($data[$v['id']]) && count($data[$v['id']]) > 0){
                $data['top'][]=$v;
            }
        }
        unset($data[0]);
        //ation open 可以在函数中计算给他
        $data['openmenu'] = $open;
        $data['activemenu'] = $active;
        return $data;

    }
}

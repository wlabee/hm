<?php

namespace App\Http\Middleware;

use Closure;

class Catrgory
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
        view()->share('cateData',$this->getCate());
        return $next($request);
    }

    /**
     * description
     * @author 
     * @param 
     * @return 
     */
    public function getCate() 
    {
        return ['厨房用品','卧室舒适'];
    }
}

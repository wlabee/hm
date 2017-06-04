<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\FriendLink;
use App\Models\Category;
use App\Models\Hotword;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getColumns()
    {
        return response()->json(config('web.colums'));
    }

    /**
    * 获取友情链接
    **/
    public function getFriendLink() {
        $data = FriendLink::orderBy('sort', 'asc')->get();
        return $this->ajax_succ($data);
    }

    /**
    * 获取分类
    */
    public function getCate() {
        $data = Category::where('pid', 0)->orderBy('sort', 'asc')->get();
        return $this->ajax_succ($data);
    }

    /**
    * 获取子分类
    */
    public function getSubCate($pid) {
        $pid = (int)$pid;
        if (! $pid) {
            return $this->ajax_faild('无效id');
        }
        $data = Category::where('pid', $pid)->orderBy('sort', 'asc')->get();

        return $this->ajax_succ($data);
    }

    /**
    * 热门搜索
    */
    public function getHotWord() {
        $data = Hotword::skip(0)->take(10)->orderBy('sort', 'asc')->get();
        return $this->ajax_succ($data);
    }
}

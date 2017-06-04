<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
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
        return response()->json([]);
    }

    public function getMainList() {
        $data = Category::where('pid', 0)->orderBy('sort', 'asc')->get();
        return $this->ajax_succ($data);
    }

    public function getSubList($pid) {
        $pid = (int)$pid;
        if (! $pid) {
            return $this->ajax_faild('无效id');
        }
        $data = Category::where('pid', $pid)->orderBy('sort', 'asc')->get();

        return $this->ajax_succ($data);
    }
}

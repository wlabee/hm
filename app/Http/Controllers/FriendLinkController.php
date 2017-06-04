<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FriendLink;
use App\Models\jdproduct;

class FriendLinkController extends Controller
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

    public function getList() {
        $data = FriendLink::orderBy('sort', 'asc')->get();
        return $this->ajax_succ($data);
    }
}

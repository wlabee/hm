<?php

namespace App\Http\Controllers;

use Laravel\Passport\HasApiTokens;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use HasApiTokens;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function login()
    {
        $token = '';
        return $this->ajax_succ(['token' => $token]);
    }

    public function logout()
    {
        return $this->ajax_succ();
    }

    public function getToken()
    {
        $token = '';
        return $this->ajax_succ(['token' => $token]);
    }
}
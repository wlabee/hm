<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
class IndexController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }

    public function upload(Request $request)
    {
        $path = $request->file('editorfile')->store('uploads/'.date('Ym'));
        echo  '/storage/' . $path;exit;
        //  return response()->json($img);
    }
    
}

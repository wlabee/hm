<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ajax_return($code = 0, $msg = '', $data = []) {
        $ret = [
            'code' => $code ? : 0,
            'msg' => $msg ? : '',
            'data' => $data,
        ];

        return response()->json($ret);
    }

    public function ajax_succ($data = []) {
        return $this->ajax_return(0, 'succ', $data);
    }

    public function ajax_faild($msg = '', $code = 500, $data = []) {
        return $this->ajax_return($code, $msg, $data);
    }
}

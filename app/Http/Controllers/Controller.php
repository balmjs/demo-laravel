<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function renderJSON($data = [], $code = 200, $message = 'OK')
    {
        $output = [
          'code' => $code,
          'msg' => $message,
          'data' => $data,
        ];

        return response()->json($output);
    }
}

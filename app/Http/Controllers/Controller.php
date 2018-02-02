<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data = [], $message = 'OK')
    {
        if ($data instanceof Arrayable) {
            $data = $data->toArray();
        }

        return response()->json([
            'status'    => true,
            'message'   => $message,
            'data'      => $data
        ]);
    }

    public function error($message)
    {
        return response()->json([
            'status'    => false,
            'message'   => $message
        ]);
    }
}

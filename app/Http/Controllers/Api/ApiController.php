<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\Arrayable;

class ApiController extends Controller
{
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

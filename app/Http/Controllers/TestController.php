<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            $username = $request->username;

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $path = $file->move('uploads', 'test.png');
                $result = [
                    'code' => 200,
                    'msg' => 'Yes',
                    'data' => [
                      'username' => $username
                    ]
                ];
            } else {
                $result = [
                    'code' => 201,
                    'msg' => 'No',
                    'data' => [
                      'username' => $username
                    ]
                ];
            }
            return response()->json($result);
        }
        return view('test');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            $username = $request->username;
            echo 'Username:'. $username.'<br>';

            if ($request->hasFile('photo')) {
              $file = $request->file('photo');
              $path = $file->move('uploads', 'test.png');
              echo 'Yes';
            } else {
              echo 'No';
            }
        }
        return view('test');
    }
}

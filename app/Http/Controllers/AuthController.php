<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Requests;
use App\User;
use App\Helpers\Util;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if (!empty($request->name) && !empty($request->email)) {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->api_token = Util::generateAPIToken(time());

            // TODO: no validator
            if ($user->save()) {
                return $this->renderJSON($user);
            } else {
                return $this->renderJSON([], 201, 'register_failure');
            }
        } else {
            return $this->renderJSON([], 500, 'invalid_request');
        }
    }

    public function login(Request $request) {
        $input = $request->only('account', 'password');

        $credentials = [
            'password' => $input['password']
        ];

        if (Str::contains($input['account'], '@')) {
            $credentials['email'] = $input['account'];
        } else {
            $credentials['name'] = $input['account'];
        }

        if (Auth::attempt($credentials)) {
            return $this->renderJSON(Auth::user());
        } else {
            return $this->renderJSON([], 201, 'login_failure');
        }
    }
}

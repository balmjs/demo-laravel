<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;

class AuthController extends ApiController
{
    public function register(Request $request)
    {
        if (!empty($request->name) && !empty($request->email)) {
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            // TODO: no validator
            if ($user->save()) {
                return $this->success($user);
            } else {
                return $this->error('register_failure');
            }
        } else {
            return $this->error('invalid_request');
        }
    }

    public function login(Request $request)
    {
        // grab credentials from the request
        $input = $request->only('account', 'password');

        $credentials = [
            'password' => $input['password']
        ];

        if (Str::contains($input['account'], '@')) {
            $credentials['email'] = $input['account'];
        } else {
            $credentials['name'] = $input['account'];
        }

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return $this->error('invalid_credentials'); // 401
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return $this->error('could_not_create_token'); // 500
        }

        // all good so return the token
        return $this->success(array_merge(
            compact('token'),
            JWTAuth::user()->toArray()
        ));
    }

    public function logout(Request $request)
    {
        JWTAuth::invalidate(JWTAuth::getToken());

        return $this->success();
    }
}

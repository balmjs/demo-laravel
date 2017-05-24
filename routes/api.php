<?php

// use Illuminate\Http\Request;
use Illuminate\Routing\Router;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([], function (Router $api) {

  $api->post('auth/register', 'AuthController@register');
  $api->post('auth/login', 'AuthController@login');

  $api->group(['middleware' => 'jwt.auth'], function (Router $api) {
    $api->post('auth/logout', 'AuthController@logout');
    $api->get('user/list', 'UserController@index');
  });

});

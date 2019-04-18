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

Route::group([
    'namespace' => 'Api',
    'middleware' => 'api'
], function ($router) {
  // Auth
  Route::group(['prefix' => 'auth'], function ($router) {
      Route::post('register', 'AuthController@register');
      Route::post('login', 'AuthController@login');
      Route::post('logout', 'AuthController@logout');
      Route::post('refresh', 'AuthController@refresh');
      Route::post('me', 'AuthController@me');
  });

  // User restful
  Route::resource('user', 'UserController', ['only' => [
    'index', 'store', 'update', 'destroy'
  ]]);


  // Test
  // Route::post('test', ['middleware' => 'cors', function () {
  // 	return 'gg';
  // }]);

  // OR
  Route::post('test', function () {
     return 'gg';
  })->middleware('cors');

  // OR
  // Route::post(['middleware' => 'cors'], function () {
  //   Route::get('test', function () {
  //     return 'gg';
  //   });
  // });
});

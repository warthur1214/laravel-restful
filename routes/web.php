<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('oauth/access_token', function () {
    return response()->json(Authorizer::issueAccessToken());
});

Route::get('/register',function(){
    $user = new App\User();
    $user->name="tester";
    $user->email="test@test.com";
    $user->password = Hash::make("password");
    $user->save();
});

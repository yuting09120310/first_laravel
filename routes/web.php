<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

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

Route::get('/first', function () {
    return 'Hello Laravel';
});

Route::get('/test', [AuthController::class, 'indexPage']);


// Route::group(['prefix' => 'user'], function(){
//     //使用者驗證
//     Route::group(['prefix' => 'auth'], function(){
//         Route::get('/sign-up', 'UserAuthController@signUpPage');
//         Route::post('/sign-up', 'UserAuthController@signUpProcess');
//         Route::get('/sign-in', 'UserAuthController@signInPage');
//         Route::post('/sign-in', 'UserAuthController@signInProcess');
//         Route::get('/sign-out', 'UserAuthController@signOut');
//     });
// });
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// GET POST => Method HTTP
// a  url 

Route::get('/',function(){
    echo "Trang chủ";
});

Route::get('/test-1',function(){
    echo "123";
});

Route::get('/list-user',[UserController::class,'showUser']
);

// Params và Slug
// param http://127.0.0.1:8000/update-user?id=1$name=thanh
Route::get('/update-user',[UserController::class,'updateUser']);
// slug http://127.0.0.1:8000/list-user/thanh/1/2
Route::get('/get-user/{id}/{name?}',[UserController::class,'getUser']);
Route::get('/sinh-vien',[UserController::class,'sinhVien']);
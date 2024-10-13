<?php

use App\Http\Controllers\InterFaceController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [InterFaceController::class, 'index'])->name('index');
Route::get('/product',[InterFaceController::class,'product'])->name('product');
Route::get('/register',[InterFaceController::class,'SignIn'])->name('SignIn');
Route::get('/register/vn',[InterFaceController::class,'SignInVN'])->name('SignInVN');
Route::get('/login',[InterFaceController::class,'Login'])->name('Login');
Route::get('/login/vn',[InterFaceController::class,'loginVN'])->name('LoginVN');
Route::get('/forgot-password',[InterFaceController::class,'forgot'])->name('forgot');
Route::get('/forgot-password/vn',[InterFaceController::class,'forgotVN'])->name('forgotVN');
Route::get('/blog',[InterFaceController::class,'blog'])->name('blog');
Route::get('/blog/micromanagement-la-gi/',[InterFaceController::class,'blogMicromanagement'])->name('blogMicromanagement');
Route::get('/blog/equity-theory-la-gi/',[InterFaceController::class,'blogEquity'])->name('blogEquity');
Route::get('/blog/lean-la-gi/',[InterFaceController::class,'blogLean'])->name('blogLean');
Route::get('/blog/dau-hieu-nhan-biet-ung-vien-khong-trung-thuc/',[InterFaceController::class,'blogTrue'])->name('blogTrue');
Route::get('/blog/tai-lieu/',[InterFaceController::class,'document'])->name('document');
Route::get('/blog/mau-de-test/',[InterFaceController::class,'exam'])->name('exam');
Route::get('/blog/tin-tuc/',[InterFaceController::class,'news'])->name('news');
Route::get('/blog/nhan-su/',[InterFaceController::class,'peoples'])->name('peoples');

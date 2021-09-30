<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\TourController;
use App\Http\Controllers\frontend\BookingController;
use App\Http\Controllers\frontend\LoginController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/frontend/index',[IndexController::class,'index_view'])->name('index_view');
Route::get('/frontend/contact',[ContactController::class,'contact_view'])->name('contact_view');
Route::get('/frontend/booking',[BookingController::class,'booking_view'])->name('booking_view');
Route::post('/frontend/save',[ContactController::class,'save'])->name('frontend.save');
Route::get('/frontend/tour_detail_view/{id}',[TourController::class,'tour_detail_view'])->name('tour_detail_view');
Route::post('/frontend/review',[TourController::class,'review'])->name('frontend.review');
Route::post('/frontend/book_post',[BookingController::class,'book_post'])->name('frontend.book_post');
Route::get('/frontend/booking',[BookingController::class,'booking_view'])->name('frontend.booking_view');

Route::get('/frontend/login',[LoginController::class,'login'])->name('login');
Route::post('/frontend/register',[LoginController::class,'register'])->name('register');



//admin
Route::get('/backend/login',[App\Http\Controllers\backend\LoginController::class,'login_view'])->name('admin.login');
Route::post('/backend/login_post',[App\Http\Controllers\backend\LoginController::class,'login_post'])->name('admin.login_post');
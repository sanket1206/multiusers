<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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


route::get('/redirects',[HomeController::class,"index"]);
     
route::get('/category',[App\Http\Controllers\CategoryController::class,'index']);

route::get('/add-category',[App\Http\Controllers\CategoryController::class,'create']);
route::Post('/add-category',[App\Http\Controllers\CategoryController::class,'store']);

route::post('/addseller',[HomeController::class,"addseller"]);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    
});

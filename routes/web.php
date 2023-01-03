<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostImageController;
use App\Http\Controllers\ApiControllerIp;
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

Route::get('/logout',function () {
    return view('welcome');
});


Route::get('/home',function () {
    // auth()->authenticate();
    return view('welcome');
})->middleware(['auth','verified']);

Route::get('logout', function (){
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');

Route::get('/login', function (){
    return view('poster.main');
})->middleware(['auth']);;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('api', [ApiControllerIp::class, 'index']);


Route::resource("/post", PostImageController::class)->middleware(['auth']);
Route::resource("/main", PostImageController::class)->middleware(['auth']);
// Route::resource("poster.upload", PostImageController::class)->middleware(['auth']);
Route::get('index', [PostImageController::class,'showup'])->middleware(['auth']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

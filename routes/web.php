<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostImageController;
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


// Route::get('/main',function () {
//     // auth()->authenticate();
//      return view('poster.main');
// })->middleware(['auth','verified']);

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

// Route::get('/main', function (){
//     return view('poster.main');
// })->middleware(['auth']);


Route::resource("/post", PostImageController::class)->middleware(['auth']);
Route::resource("/main", PostImageController::class)->middleware(['auth']);
Route::resource("/index", PostImageController::class)->middleware(['auth']);
Route::resource("/upload", PostImageController::class)->middleware(['auth']);
// Route::resource("poster.upload", PostImageController::class)->middleware(['auth']);
Route::get('/index', function (){
    return view('poster.index');
})->middleware(['auth']);;
// Route::get('/post',function () {
//     // auth()->authenticate();
//      return view('upload');
// })->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

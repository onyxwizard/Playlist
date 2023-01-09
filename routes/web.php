<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostImageController;
use App\Http\Controllers\ApiControllerIp;
use App\Http\Controllers\CommentsController;
use App\Models\Comments;
use App\Models\User;
use App\ApiServiceProviderClass;
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
    return view('welcome');
})->middleware(['auth','verified']);

Route::get('logout', function (){
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');

Route::get('/login', function (){
    return view('poster.main');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return redirect('/main');
})->middleware(['auth', 'verified'])->name('dashboard');

app()->bind('apifunction',function(){
    return new \App\ApiServiceProviderClass();
});
Route::get('/api', function(ApiServiceProviderClass $req) {
    $req->apicall();
    
    // $apireq =  $apifunction->returns();
    return view('api')->with('req',$req->apicall());
});


// Route::get('api', [ApiControllerIp::class, 'index']);
Route::post('comments', [CommentsController::class,'store'])->middleware(['auth']);
Route::post('deletecmts', [CommentsController::class,'destroy'])->middleware(['auth']);

Route::post('deletepost', [PostImageController::class,'destroy'])->middleware(['auth']);
Route::resource("/post", PostImageController::class)->middleware(['auth']);
Route::resource("/main", PostImageController::class)->middleware(['auth']);
Route::get('index', [PostImageController::class,'showup'])->middleware(['auth']);
Route::get('/view/{cmtid}', [PostImageController::class,'show'])->middleware(['auth']);
Route::get('/editpost/{id}', [PostImageController::class,'edit'])->middleware(['auth']);
Route::put('/updatepost/{id}', [PostImageController::class,'update'])->middleware(['auth']);

Route::get('/editcomment/{id}', [CommentsController::class,'edit'])->middleware(['auth']);
Route::put('/updatecomments/{id}', [CommentsController::class,'update'])->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/readpost', function(){
    auth()->user()->unreadnotifications->markasRead();
})->middleware(['auth']);


require __DIR__.'/auth.php';

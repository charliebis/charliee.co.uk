<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

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

/*Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');*/



//Route::get('/user', [UserController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'sendMail'])->name('contact.send');
Route::get('/work', [WorkController::class, 'index'])->name('work.index');

/*Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/post/{id}', function ($id) {

    return 'This is post number: ' . $id;
    //return view('home');
});

Route::get('admin/posts/example', ['as' => 'admin.home', function () {

    $url = route('admin.home');

    return 'This is URL is: ' . $url;
    //return view('home');
}]);


Route::get('admin/posts/foobar', function () {

    $url = route('test.foobar');

    return 'This is URL is: ' . $url;
    //return view('home');
})->name('test.foobar');*/

//Route::get('/post/{id}', [PostsController::class, 'index'])->parameters;


/*Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('/contact', [PostsController::class, 'contact']);

Route::get('post/{id}/{name}/{extra}', [PostsController::class, 'showPost']);*/

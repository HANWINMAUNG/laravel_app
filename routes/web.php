<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SendEmailController;


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
//facade
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('post',function (){
//     return view('post');
// });
// Route::get('index', function(){
//     return view('post');
// });
//view

// Route::view('/welcome', 'welcome'); //static view use

//controller

// Route::get('/', 'App\Http\Controllers\PageController@index');
Route::view('/', 'welcome'); 
Route::view('/dashboard', 'welcome')->name('get.home'); 

Route::group([
    'prefix'=>'admin',
    'middleware'=>'web',
    'namespace'=>'App\Http\Controllers\Backend'
],function(){
    Route::resource('posts', PostController::class);

    Route::resource('category', CategoryController::class);
});

Route::get('send-email', [SendEmailController::class, 'sendEmail']);


Route::group([
    'namespace' =>'App\Http\Controllers'
], function(){
    Route::group([
        'namespace' =>'auth_new'
    ], function(){
        Route::get('register-new', "RegisterController@index")->name('register-new.index');
        Route::post('register-new', "RegisterController@register")->name('register-new.post');
        Route::post('logout-new', 'AuthController@logout')->name('logout-new.post');
    });
});

// Route::get('send-email', function(){ 
//     $data = ['name'=>'han win maung'];

//     Mail::send('email.mail_test', $data, function ($message){
//         $message->to('dev.hwn@gmail.com','han win maung')->subject('email subject');
//         $message->from('laravelbasic@programming.com', 'Testing email');
//     });ှှ
//     return back()->with('status','u are email is successfully.');
// });

// Route::prefix('admin')->group(function (){

//     Route::resource('posts', PostController::class)->middleware('check.auth');

//     Route::resource('category', CategoryController::class);
// });



//post
// Route::get('posts', [PostController::class, 'index'])->name('post.index');
// Route::get('posts/create', [PostController::class, 'create'])->name('post.create');
// Route::post('posts', [PostController::class, 'store'])->name('post.store');

// Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::patch('posts/{post}', [PostController::class, 'update'])->name('post.update');

// Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('post.delete');
// //route model binding
// Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\About;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Articles;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SelamatDatang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;


// Route::get('/hello', function () { return 'Hello World';
// });

Route::get('/world', function () { return 'World';
});

Route::get('/selamat', function () { return 'Selamat Datang';
});

Route::get('/about', function () { return '2241720045 Tirta';
});

Route::get('/user/{name}', function ($name) { return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

Route::get('/articles/{id}', function ($id,) {
    return 'Halaman Artikel dengan ID '.$id;
    });

Route::get('/userr/{name?}', function ($name='John') { 
    return 'Nama saya '.$name;
});

Route::get('/userrr/profile', function() {
    //
    })->name('profile');    

Route::get('/helloo', [WelcomeController::class,'hello']);
Route::get('/selamatDatang', [SelamatDatang::class,'index']);
Route::get('/aboutt', [About::class,'about']);
Route::get('/Articless/{id}', [Articles::class,'articles']);
Route::get('/Home', [HomeController::class,'index']);
Route::get('/About', [AboutController::class,'about']);
Route::get('/Articlesss/{id}', [Articles::class,'articles']);

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([ 'index', 'show']);
Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy']);

    // Route::middleware(['first', 'second'])->group(function () { Route::get('/', function () {
    //     // Uses first & second middleware...
    //     });
        
    //     Route::get('/user/profile', function () {
    //     // Uses first & second middleware...
    //     });
    //     });
        
    //     Route::domain('{account}.example.com')->group(function () { Route::get('user/{id}', function ($account, $id) {
    //     //
    //     });
    //     });
        
    //     Route::middleware('auth')->group(function () { Route::get('/user', [UserController::class, 'index']); Route::get('/post', [PostController::class, 'index']); Route::get('/event', [EventController::class, 'index']);
        
    //     });

    // Route::prefix('admin')->group(function () { Route::get('/user', [UserController::class, 'index']); Route::get('/post', [PostController::class, 'index']); Route::get('/event', [EventController::class, 'index']);

    // });
    
    // Route::redirect('/here', '/there');
    
    // Route::view('/welcome', 'welcome'); Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
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

Route::get('/', function () {
    return view('welcome');
});


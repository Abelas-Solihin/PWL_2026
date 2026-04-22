<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticleController::class, 'articles']);
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

Route::get('/world', function () { 
return 'World'; 
}); 

Route::get('/', function () {
    return view ('welcome');
});

Route::get('/NIM_Nama', function(){
    return 'Nim: 244107020052 Nama: Abelas Solihin';
});

Route::get('/user/{name}', function ($name) { 
return 'Nama Saya: '.$name; 
});

Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
}); 

Route::get('/articles/{id}', function ($id,){
    return "Halaman Artikel dengan ID" .$id;
});

Route::get('/user/{name?}', function ($name=null) { 
    return 'Nama saya '.$name; 
});

Route::get('/user/{name?}', function($name='John'){
     return 'Nama Saya ' .$name;
});



Route::get('/hello', [WelcomeController::class, 'hello']);

use App\Http\Controllers\PhotoController; 
Route::resource('photos', PhotoController::class);

Route::get('/greeting', [WelcomeController::class, 'greeting'] ); { 
return view('blog.hello', ['name' => 'Abelas_Solihin']); 
};
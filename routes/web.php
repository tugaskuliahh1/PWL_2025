<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\GreetingController;

Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/about', [WelcomeController::class, 'about']);
Route::get('/articles/{id}', [WelcomeController::class, 'articles']);
Route::get('/', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id}', ArticleController::class);
Route::get('/greeting', [GreetingController::class, 'index']);
Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
Route::get('/greeting', function () {
	return view('blog.hello', ['name' => 'Ismi']);
});
Route::get('/greeting', [WelcomeController::class, 'greeting']);
?>

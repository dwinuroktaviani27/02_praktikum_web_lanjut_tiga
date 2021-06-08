<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('https://www.educastudio.com/');
});

Route::prefix('products')->group(function () {
    Route::get('/1', function () {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/2', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/3', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('/4', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

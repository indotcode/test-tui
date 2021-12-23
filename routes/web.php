<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsController;
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

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard', function () {
        return view('dashboard.home');
    })->name('dashboard');

    Route::get('/dashboard/news', [NewsController::class, 'index'])->name('dashboard.news');
    Route::middleware(['role:editor', 'role:admin'])->group(function (){
        Route::get('/dashboard/news-create', [NewsController::class, 'create'])->name('dashboard.news.create');
        Route::post('/dashboard/news-create', [NewsController::class, 'store'])->name('dashboard.news.store');
    });

});


require __DIR__.'/auth.php';

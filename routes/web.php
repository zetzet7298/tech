<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Artisan;

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
// Include auth routes
require __DIR__.'/auth.php';
// Route::group(['middleware' => 'count.visitors.by.ip'], function () {
Route::get('/', [PageController::class, 'index'])->name('trangchu')->middleware('cache.response');
Route::get('/gioi-thieu', [PageController::class, 'gioithieu'])->name('gioithieu');
Route::get('/du-an', [PageController::class, 'duan'])->name('duan');
Route::get('/dich-vu', [PageController::class, 'dichvu'])->name('dichvu');
Route::get('/tin-tuc', [PageController::class, 'tintuc'])->name('tintuc');
Route::get('/nhan-su', [PageController::class, 'nhansu'])->name('nhansu');
Route::get('/lien-he', [PageController::class, 'lienhe'])->name('lienhe');
// });

//...

Route::get('create-symlink', function() {
    Artisan::call('storage:link');
});

Route::get('memcache', function() {
    Artisan::call('storage:link');
});
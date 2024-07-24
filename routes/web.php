<?php

use App\Http\Controllers\ContactController;
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
// require __DIR__ . '/auth.php';
require __DIR__ . '/cms.php';

// Route::group(['middleware' => 'count.visitors.by.ip'], function () {
Route::get('/', [PageController::class, 'index'])->name('trangchu')->middleware('cache.response');
Route::get('/gioi-thieu', [PageController::class, 'gioithieu'])->name('gioithieu');
Route::get('/tuyen-dung', [PageController::class, 'tuyendung'])->name('tuyendung');
Route::get('/dich-vu', [PageController::class, 'dichvu'])->name('dichvu');
Route::get('/bai-viet', [PageController::class, 'tintuc'])->name('tintuc');
Route::get('/nhan-su', [PageController::class, 'nhansu'])->name('nhansu');
Route::get('/nhan-su/{slug}', [PageController::class, 'nhansuDetail'])->name('nhansu.detail');
Route::get('/nhan-su/frame/{slug}', [PageController::class, 'nhansuDetailFrame'])->name('nhansu.frame');
Route::get('/lien-he', [PageController::class, 'lienhe'])->name('lienhe');
Route::post('/contact', [ContactController::class, 'frontendStore'])->middleware('throttle:3,1')->name('contact.fe.store');
Route::get('/bai-viet/{slug}', [PageController::class, 'postDetail'])->name('tintuc.detail')
// ->middleware('trailing.slash')
;
Route::get('/danh-muc/{slug}', [PageController::class, 'category'])->name('tintuc.category');
Route::get('/tuyen-dung/{slug}', [PageController::class, 'chitietTuyenDung'])->name('tuyendung.chitiet');

// });

//...

Route::get('create-symlink', function () {
    Artisan::call('storage:link');
});

Route::get('memcache', function () {
    Artisan::call('storage:link');
});

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');

// vendor/ckfinder/ckfinder-laravel-package/src/routes.php

Route::any('/ckfinder/examples/{example?}', 'CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
->name('ckfinder_examples');
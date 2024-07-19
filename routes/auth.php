<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\UserController;

Route::prefix('admin')->group(function () {
    // Route::get('/register', [RegisteredUserController::class, 'create'])
    //                 ->middleware('guest')
    //                 ->name('register');

    // Route::post('/register', [RegisteredUserController::class, 'store'])
    //                 ->middleware('guest');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest');

    // Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    //                 ->middleware('guest')
    //                 ->name('password.request');

    // Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    //                 ->middleware('guest')
    //                 ->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->middleware('guest')
        ->name('password.reset');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->middleware('guest')
        ->name('password.update');

    // Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    //                 ->middleware('auth')
    //                 ->name('verification.notice');

    // Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    //                 ->middleware(['auth', 'signed', 'throttle:6,1'])
    //                 ->name('verification.verify');

    // Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    //                 ->middleware(['auth', 'throttle:6,1'])
    //                 ->name('verification.send');

    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->middleware('auth')
        ->name('password.confirm');

    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware('auth');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout');
    // $menu = theme()->getMenu();
    // array_walk($menu, function ($val) {
    //     if (isset($val['path'])) {
    //         $route = Route::get($val['path'], [PagesController::class, 'index']);
    // // dd($route);
    //         // Exclude documentation from auth middleware
    //         if (!Str::contains($val['path'], 'documentation')) {
    //             $route->middleware('auth');
    //         }
    //     }
    // });
    Route::middleware('auth')->group(function () {
        // Route::resource('slider', SliderController::class);
        Route::get('/', [PagesController::class, 'index']);
        Route::get('settings/{type}', [SettingController::class, 'index'])->name('settings.index');
        Route::put('settings/{type}', [SettingController::class, 'update'])->name('settings.update');
        Route::resource('solutions', SolutionController::class);
        Route::resource('feedbacks', FeedbackController::class);
        Route::resource('recruitments', RecruitmentController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('employees', EmployeeController::class);
        Route::resource('specialties', SpecialtyController::class);

        // Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
        // Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
        // Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        // Route::post('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        // Route::get('categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

        Route::resource('posts', PostController::class);
        Route::get('post/approve/{post}', [PostController::class, 'approve'])->name('post.approve');
        Route::get('post/delete/{post}', [PostController::class, 'delete'])->name('post.delete');
        Route::get('post/set-featured/{post}', [PostController::class, 'setFeatured'])->name('post.set_featured');
    });
});

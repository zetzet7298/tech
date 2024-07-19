<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\OfficeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Controllers\UserController;

Route::prefix('cms')->group(function () {
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

    Route::post('/confirm-2fa', [AuthenticatedSessionController::class, 'login_2fa'])->name('confirm_2fa');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth')
        ->name('logout');

    Route::middleware('auth')->group(function () {
        // Route::resource('slider', SliderController::class);
        // Route::get('/', [PagesController::class, 'index'])->name('home');
        Route::get('/', [UserController::class, 'getUserMe'])->name('home');
        Route::post('/users/user/me', [UserController::class, 'UpdateUserMe'])->name('users.update.me');
        Route::get('/users/permission/{id}', [UserController::class, 'getPermission'])
            ->name('users.permissions')->middleware('check.admin');
        Route::post('/users/permission/{id}', [UserController::class, 'assignPermission'])
            ->name('users.assign.permissions')->middleware('check.admin');

        Route::get('settings/{type}', [SettingController::class, 'index'])->name('settings.index')->middleware('check.role:common');
        Route::put('settings/{type}', [SettingController::class, 'update'])->name('settings.update')->middleware('check.role:common');
        Route::resource('solutions', SolutionController::class)->middleware('check.role:solution');
        Route::resource('feedbacks', FeedbackController::class)->middleware('check.role:feedback');
        Route::resource('recruitments', RecruitmentController::class)->middleware('check.role:recruitment');
        Route::resource('categories', CategoryController::class)->middleware('check.role:category');
        Route::resource('employees', EmployeeController::class)->middleware('check.role:employee');
        Route::resource('specialties', SpecialtyController::class)->middleware('check.role:specialty');
        Route::resource('offices', OfficeController::class)->middleware('check.role:office');
        Route::resource('users', UserController::class)->middleware('check.admin');
        Route::get('enable-2fa', [TwoFactorController::class, 'enableTwoFactor'])->name('enableTwoFactor');
        Route::post('verify-2fa', [TwoFactorController::class, 'verifyTwoFactor'])->name('verifyTwoFactor');
        // routes/web.php
        Route::post('/upload', [ImageUploadController::class, 'upload'])->name('image.upload');

        // Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
        // Route::post('categories', [CategoryController::class, 'store'])->name('categories.store');
        // Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        // Route::post('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        // Route::get('categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

        Route::resource('posts', PostController::class)->middleware('check.role:post');
        Route::resource('services', ServiceController::class)->middleware('check.role:service');
        Route::get('post/approve/{post}', [PostController::class, 'approve'])->name('post.approve')->middleware('check.role:edit');
        Route::get('post/delete/{post}', [PostController::class, 'delete'])->name('post.delete')->middleware('check.role:delete');
        Route::get('post/set-featured/{post}', [PostController::class, 'setFeatured'])->name('post.set_featured')->middleware('check.role:edit');
    });
});

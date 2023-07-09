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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'homeView'])->name('view.home');

Route::prefix('blogs')->group(function(){
    Route::get('/', [\App\Http\Controllers\BlogController::class, 'homeView'])->name('view.blogs.home');
    Route::get('/{url}', [\App\Http\Controllers\BlogController::class, 'detailView'])->name('view.blogs.detail');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [\App\Http\Controllers\Internal\Auth\LoginController::class, 'loginView'])->name('view.admin.login');
    Route::post('/login', [\App\Http\Controllers\Internal\Auth\LoginController::class, 'loginAction'])->name('action.admin.login');

    //Admin ayrıcalıklı route'lar
    Route::group(['middleware' => 'authAdmin'], function () {
        Route::get('/', [\App\Http\Controllers\Internal\HomeController::class, 'homeView'])->name('view.admin.home');
        Route::get('/logout', [\App\Http\Controllers\Internal\Auth\LogoutController::class, 'logoutAction'])->name('action.admin.logout');

        Route::prefix('blogs')->group(function () {
            Route::get('/', [\App\Http\Controllers\Internal\BlogController::class, 'homeView'])->name('view.admin.blogs.home');
            Route::get('/create', [\App\Http\Controllers\Internal\BlogController::class, 'createView'])->name('view.admin.blog.create');
            Route::post('/create', [\App\Http\Controllers\Internal\BlogController::class, 'createAction'])->name('action.admin.blog.create');
            Route::get('/update/{blog}', [\App\Http\Controllers\Internal\BlogController::class, 'updateView'])->name('view.admin.blog.update');
            Route::post('/update/{blog}', [\App\Http\Controllers\Internal\BlogController::class, 'updateAction'])->name('action.admin.blog.update');
            Route::post('/delete/{blog}', [\App\Http\Controllers\Internal\BlogController::class, 'deleteAction'])->name('action.admin.blog.delete');
        });
        Route::prefix('users')->group(function () {
            Route::get('/', [\App\Http\Controllers\Internal\UserController::class, 'homeView'])->name('view.admin.users.home');
            Route::get('/create', [\App\Http\Controllers\Internal\UserController::class, 'createView'])->name('view.admin.user.create');
            Route::post('/create', [\App\Http\Controllers\Internal\UserController::class, 'createAction'])->name('action.admin.user.create');
            Route::get('/update/{user}', [\App\Http\Controllers\Internal\UserController::class, 'updateView'])->name('view.admin.user.update');
            Route::post('/update/{user}', [\App\Http\Controllers\Internal\UserController::class, 'updateAction'])->name('action.admin.user.update');
            Route::post('/delete/{user}', [\App\Http\Controllers\Internal\UserController::class, 'deleteAction'])->name('action.admin.user.delete');
        });
    });

});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeSliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublikController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/404', function () {
    return view('pages.error.404');
});

Route::get('/', [PublikController::class, 'home'])->name('home.publik');
Route::get('/about', [PublikController::class, 'about'])->name('about.publik');
Route::get('/project', [PublikController::class, 'project'])->name('project.publik');
Route::get('/contact', [PublikController::class, 'contact'])->name('contact.publik');

// Rute Admin
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dash');
    Route::get('/admin/profile/edit', [AdminController::class, 'editProf'])->name('prof.edit');
    Route::post('/admin/profile/updateProfile', [AdminController::class, 'updateProf'])->name('prof.update');
    Route::get('/admin/profile/editPass', [AdminController::class, 'editPass'])->name('prof.edit.pass');
    Route::post('/admin/profile/updatePass', [AdminController::class, 'updatePass'])->name('prof.update.pass');

    Route::get('/admin/home', [HomeSliderController::class, 'index'])->name('home.data');
    Route::get('/admin/home/add', [HomeSliderController::class, 'create'])->name('home.add');
    Route::post('/admin/home/store', [HomeSliderController::class, 'store'])->name('home.store');
    Route::get('/admin/home/edit/{id}', [HomeSliderController::class, 'edit'])->name('home.edit');
    Route::post('/admin/home/update/{id}', [HomeSliderController::class, 'update'])->name('home.update');
    Route::get('/admin/home/delete/{id}', [HomeSliderController::class, 'destroy'])->name('home.delete');

    Route::get('/admin/project', [ProjectController::class, 'index'])->name('project.data');
    Route::get('/admin/project/add', [ProjectController::class, 'create'])->name('project.add');
    Route::post('/admin/project/store', [ProjectController::class, 'store'])->name('project.store');
    Route::get('/admin/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit');
    Route::post('/admin/project/update/{id}', [ProjectController::class, 'update'])->name('project.update');
    Route::get('/admin/project/delete/{id}', [ProjectController::class, 'destroy'])->name('project.delete');

    Route::get('/admin/comment', [CommentController::class, 'index'])->name('comment.data');
    Route::get('/admin/comment/add', [CommentController::class, 'create'])->name('comment.add');
    Route::post('/admin/comment/store', [CommentController::class, 'store'])->name('comment.store');
    Route::get('/admin/comment/edit/{id}', [CommentController::class, 'edit'])->name('comment.edit');
    Route::post('/admin/comment/update/{id}', [CommentController::class, 'update'])->name('comment.update');
    Route::get('/admin/comment/delete/{id}', [CommentController::class, 'destroy'])->name('comment.delete');

    Route::get('/admin/user', [UserController::class, 'index'])->name('user.data');
    Route::get('/admin/user/add', [UserController::class, 'create'])->name('user.add');
    Route::post('/admin/user/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/admin/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('/admin/user/resetPass/{id}', [UserController::class, 'resetPass'])->name('user.resetpass');

});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

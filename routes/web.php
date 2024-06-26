<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ClubController::class, 'index']);

Route::get('/club-profile/{clubAlias}', [ClubController::class, 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('memberApproved')->group(function () {
        Route::get('/club-forum/{clubAlias}', [ForumController::class, 'index']);
        Route::post('/club-forum/create-question', [ForumController::class, 'create']);
        Route::get('/club-forum/{clubAlias}/{questionId}', [ForumController::class, 'details']);
        Route::post('/club-forum/{clubAlias}/create-reply', [ForumController::class, 'reply']);
    });

    Route::middleware('admin')->group(function () {
        Route::get('/club-list', [ClubController::class, 'list']);
        Route::post('/club-create', [ClubController::class, 'store']);
        Route::post('/club-delete', [ClubController::class, 'destroy']);

        Route::get('/member-list', [MemberController::class, 'list']);
        Route::post('/member-create', [MemberController::class, 'store']);
        Route::post('/member-approve', [MemberController::class, 'approve']);
        Route::post('/member-unapprove', [MemberController::class, 'unapprove']);
        Route::post('/member-delete', [MemberController::class, 'destroy']);
    });
});

require __DIR__.'/auth.php';

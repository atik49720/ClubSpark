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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/club-list', [ClubController::class, 'list']);
    Route::post('/club-create', [ClubController::class, 'store']);
    Route::post('/club-delete', [ClubController::class, 'destroy']);

    Route::get('/club-forum/{clubAlias}', [ForumController::class, 'index']);
    Route::get('/club-forum/{clubAlias}/{questionId}', [ForumController::class, 'details']);

    Route::get('/member-list', [MemberController::class, 'list']);
    Route::post('/member-create', [MemberController::class, 'store']);
    Route::post('/member-delete', [MemberController::class, 'destroy']);
});

require __DIR__.'/auth.php';

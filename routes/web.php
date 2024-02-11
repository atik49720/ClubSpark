<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [ClubsController::class, 'index']);
Route::get('/member-login', [MemberController::class, 'index']);
Route::get('/member-register', [MemberController::class, 'create']);
Route::get('/member-dashboard', [MemberController::class, 'show']);

Route::post('/memberLogin', [MemberController::class, 'login'])->name('memberLogin');
Route::post('/memberRegister', [MemberController::class, 'store'])->name('memberRegister');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {
  Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::get('/family/create', [App\Http\Controllers\FamilyController::class, 'create'])->name('family.create');
  Route::post('/family', [App\Http\Controllers\FamilyController::class, 'store'])->name('family.store');
  Route::get('/family/{id}', [App\Http\Controllers\FamilyController::class, 'show'])->name('family.show');
  Route::put('/family/{id}', [App\Http\Controllers\FamilyController::class, 'update'])->name('family.update');
  Route::delete('/family/{id}', [App\Http\Controllers\FamilyController::class, 'destroy'])->name('family.delete');

  Route::get('/family/{family_id}/members/create', [App\Http\Controllers\MembersController::class, 'create'])->name('family.member.create');
  Route::post('/family/{family_id}/members', [App\Http\Controllers\MembersController::class, 'store'])->name('family.member.store');
  Route::get('/family/{family_id}/members', [App\Http\Controllers\MembersController::class, 'show'])->name('family.members');
  Route::delete('/family/{family_id}/members/{id}', [App\Http\Controllers\MembersController::class, 'destroy'])->name('family.member.delete');
});

<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlayListController;
use App\Http\Controllers\RecordStoreController;
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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/reset-password', [AuthController::class, 'showResetPasswordForm'])->name('password.request');
Route::get('/reset-password-alert', [AuthController::class, 'showResetPasswordAlert'])->name('password.alert');
Route::get('/change-password', [AuthController::class, 'showChangePasswordForm'])->name('password.change');

Route::get('/record-store/approve', [RecordStoreController::class, 'approve'])->name('RecordStore.approve');

Route::resource('record-store', RecordStoreController::class)->names([
    'index' => 'RecordStore.index',
    'edit' => 'RecordStore.edit',
    'update' => 'RecordStore.update',
    'show' => 'RecordStore.show',
    'destroy' => 'RecordStore.destroy',
])->except([
    'create', 'store' // Loại bỏ các phương thức 'create' và 'store'
]);

Route::get('/play-list/{id}/edit-ban-ghi', [PlayListController::class, 'edit2'])->name('PlayList.edit2');

Route::resource('play-list', PlayListController::class)->names([
    'index' => 'PlayList.index',
    'create' => 'PlayList.create',
    'store' => 'PlayList.store',
    'edit' => 'PlayList.edit',
    'update' => 'PlayList.update',
    'show' => 'PlayList.show',
    'destroy' => 'PlayList.destroy',
]);
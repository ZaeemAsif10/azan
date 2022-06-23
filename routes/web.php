<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\RoleController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('roles',[RoleController::class, 'index'])->name('roles');
Route::post('store-role',[RoleController::class, 'storeRole'])->name('store.role');
Route::get('edit-role',[RoleController::class, 'editRole']);
Route::post('update-role',[RoleController::class, 'updateRole'])->name('update.role');
Route::get('delete-role',[RoleController::class, 'deleteRole']);

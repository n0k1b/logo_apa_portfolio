<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/admin', [AdminController::class, 'view_login'])->name('view-login');
Route::post('/admin/login/post', [AdminController::class, 'login'])->name('login');
Route::group(['middleware' => ['admin_auth']], function () {
    Route::get('/admin/create-project', [AdminController::class, 'view_create_project'])->name('view-create-project');
    Route::post('/admin/create-project/post', [AdminController::class, 'create_project'])->name('create-project');
    Route::get('/admin/edit-project/{id}', [AdminController::class, 'view_edit_project'])->name('view-edit-project');
    Route::post('/admin/edit-project/post', [AdminController::class, 'edit_project'])->name('edit-project');
    Route::get('/admin/project/delete/{id}', [AdminController::class, 'delete_project'])->name('delete-project');

    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');
});

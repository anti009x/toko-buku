<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Layout\LayoutController;
use App\Http\Controllers\Login\ViewLoginController;
use App\Http\Controllers\User\UserController;
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




Route::get('/admindashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin_table', [TableController::class, 'index'])->name('admin.table');

Route::get('/admin_table', [TableController::class, 'index'])->name('admin.table');

Route::post('/admin_table', [TableController::class, 'store'])->name('admin.crud');

Route::delete('/admin_table/{id}', [TableController::class, 'destroy'])->name('admin.crud.destroy');

Route::put('/admin_table/{id}', [TableController::class, 'update'])->name('admin.crud.update');

//Login


Route::get('/',[ViewLoginController::class,'index'])->name('login.view');







Route::post('/post_login', [ViewLoginController::class, 'postlogin'])->name('login');
Route::post('/logout', [ViewLoginController::class,'logout'])->name('logout.perform');


Route::group(['middleware'=>['auth','checklevel:pengguna']],function(){
    Route::get('/home', [UserController::class, 'index']);
});

// Route::group(['middleware'=>['auth','checklevel:admin']],function(){
  
// });




<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\chat\AdminChatController;
use App\Http\Controllers\Chat\ChatControllerTest;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\Layout\LayoutController;
use App\Http\Controllers\Login\ViewLoginController;
use App\Http\Controllers\Pembayaran\HistoryController;
use App\Http\Controllers\Pembayaran\PembayaranController;
use App\Http\Controllers\Rating\RatingController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
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


//chhatting

Route::get('/chat',[ChatControllerTest::class,'index'])->name('user.chat');
Route::get('/chat_admin',[AdminChatController::class,'index'])->name('admin.chat');


Route::post('/rating',[RatingController::class,'store'])->name('rating.send');

//midtrans
Route::get('/bayar/{id}', [PembayaranController::class, 'bayar'])->name('id.bayar');
Route::post('/donation/payment', [DonationController::class, 'pay'])->name('donation.pay');



Route::get('/history', [HistoryController::class,'index'])->name('history.history');
Route::get('/chatify', [ChatController::class, 'index'])->name('message.message');



//Login
// Rute untuk Login dan Logout
Route::get('/', [ViewLoginController::class, 'index'])->name('login.view');
Route::post('/post_login', [ViewLoginController::class, 'postlogin'])->name('login');
Route::post('/logout', [ViewLoginController::class, 'logout'])->name('logout.perform');

// Untuk pengguna
Route::group(['middleware'=>['auth','ceklevel:pengguna']],function(){
    Route::get('/home', [UserController::class, 'index'])->name('user.view');
});

// Untuk admin
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function() {
    Route::get('/admindashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    


Route::get('/admin_table', [TableController::class, 'index'])->name('admin.table');

Route::post('/admin_table', [TableController::class, 'store'])->name('admin.crud');

Route::delete('/admin_table/{id}', [TableController::class, 'destroy'])->name('admin.crud.destroy');

Route::put('/admin_table/{id}', [TableController::class, 'update'])->name('admin.crud.update');
   
});



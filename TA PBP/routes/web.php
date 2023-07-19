<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

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

//Dashboard
Route::get('/dashboard', function(){
    return view ('dashboard');
});
//Dashboard user
Route::get('/dashboarduser', function(){
    return view ('dashboarduser');
});

Route::get('/login', function(){
    return view ('login');
});

//BUKU
//Dashboard create
Route::get('/tambahbuku', function(){
    return view ('dsh_createbuku');
});

//Proses create
Route::post('/create_buku', [App\Http\Controllers\controller_buku::class, 'createBuku']);

//Dashboard read
Route::get('/dashboard_buku', [App\Http\Controllers\controller_buku::class, 'getBuku']);

//Dashboard update
Route::get('/update/{id}', [App\Http\Controllers\controller_buku::class, 'getbyid']);
//Proses update
Route::post('/update_buku', [App\Http\Controllers\controller_buku::class, 'updateBuku']);

//Dashboard delete
Route::get('/delete/{id}',[App\Http\Controllers\controller_buku::class, 'deleteBuku']);


//PENGGUNA
//Dashboard create
Route::get('/tambahpengguna', function(){
    return view ('dsh_createpengguna');
});
//Proses create
Route::post('/create_pengguna', [App\Http\Controllers\controller_pengguna::class, 'createPengguna']);

//Dashboard read
Route::get('/dashboard_pengguna', [App\Http\Controllers\controller_pengguna::class, 'getPengguna']);

//Dashboard update
Route::get('/updateuser/{id}', [App\Http\Controllers\controller_pengguna::class, 'getbyid']);
//Proses update
Route::post('/update_pengguna', [App\Http\Controllers\controller_pengguna::class, 'updatePengguna']);

//Dashboard delete
Route::get('/deleteuser/{id}',[App\Http\Controllers\controller_pengguna::class, 'deletePengguna']);


//search 


//Dashboard buku user
Route::get('/dashboard_buku_user', [App\Http\Controllers\controller_buku::class, 'getBukuUser']);

//login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');


//TRANSAKSI
//Dashboard create
Route::get('/tambahtransaksi', function(){
    return view ('dsh_createtransaksi');
});
//Proses create
Route::post('/create_transaksi', [App\Http\Controllers\controller_transaksi::class, 'createTransaksi']);

//Dashboard read
Route::get('/dashboard_transaksi', [App\Http\Controllers\controller_transaksi::class, 'getTransaksi']);

//Dashboard update
//::get('/updatetransaksi/{id}', [App\Http\Controllers\controller_transaksi::class, 'getbyid']);
//Proses update
//Route::post('/update_transaksi', [App\Http\Controllers\controller_transaksi::class, 'updateTransaksi']);

//Dashboard delete
Route::get('/deletetransaksi/{id}',[App\Http\Controllers\controller_transaksi::class, 'deleteTransaksi']);


//Dashboard read user
Route::get('/dashboard_transaksi_user', [App\Http\Controllers\controller_transaksi::class, 'getTransaksiUser']);

Route::get('/login_user', function(){
    return view ('login_user');
});

Route::get('/', [LoginController::class, 'login_user'])->name('login_user');
Route::post('actionlogin_user', [LoginController::class, 'actionlogin_user'])->name('actionlogin_user');


//register
Route::get('register_user', [RegisterController::class, 'register_user'])->name('register_user');
Route::post('register/action_user', [RegisterController::class, 'actionregister_user'])->name('actionregister_user');
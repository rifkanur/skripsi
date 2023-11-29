<?php

use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RegisterguruController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\RegistersiswaController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JadwalguruController;
use App\Http\Controllers\JadwalsiswaController;

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

Route::get('/index', function () {
    return view('layout.index');
});

Route::post('/insertJadwal', [JadwalController::class, 'insertjadwal']);
Route::get('/jadwal', [JadwalController::class, 'jadwal']);
Route::get('/jadwal/{id}/hapus', [JadwalController::class, 'hapus']);
Route::post('/jadwal/{id}/update', [JadwalController::class, 'update']);
Route::get('/jadwalguru', [JadwalguruController::class, 'jadwalguru']);
Route::get('/jadwalsiswa', [JadwalsiswaController::class, 'jadwalsiswa']);


Route::post('/createguru', [RegisterguruController::class, 'insertregisterguru']);
Route::get('/dataguru', [GuruController::class, 'dataguru']);
Route::get('/dataguru/{id}/hapus', [GuruController::class, 'hapus']);
Route::get('/dataguru/{id}/edit', [GuruController::class, 'edit'] );
Route::post('/dataguru/{id}/edit', [GuruController::class, 'update'] );

Route::post('/createdatasiswa', [RegistersiswaController::class, 'insertregisterdatasiswa']);
Route::get('/datasiswa', [DatasiswaController::class, 'datasiswa']);
Route::get('/datasiswa/{id}/hapus', [DatasiswaController::class, 'hapus']);
Route::get('/datasiswa/{id}/edit', [DatasiswaController::class, 'edit'] );
Route::post('/datasiswa/{id}/edit', [DatasiswaController::class, 'update'] );

Route::get('/login', [LoginController::class, 'viewlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('actionlogin');

Route::post('/updatepassword/{id}', [ForgotpasswordController::class, 'update']);
Route::get('/forgotpassword/{id}', [ForgotpasswordController::class, 'forgotpassword']);
Route::post('/forgetpassword/{id}/update', [JadwalController::class, 'update']);
Route::post('/findaccount', [ForgotpasswordController::class, 'findaccount'] );


Route::get('/template', function () {
    return view('template.templateadmin');
});

Route::get('/paketsoal', function () {
    return view('guru.paketsoal');
});
Route::get('/indexguru', function () {
    return view('guru.indexguru');
});
Route::get('/templatelandingpage', function () {
    return view('template.templatelandingpage');
});
Route::get('/paketsoal', function () {
    return view('guru.paketsoal');
});
Route::get('/indexsiswa', function () {
    return view('siswa.indexsiswa');
});
Route::get('/ujian', function () {
    return view('siswa.ujian');
});
Route::get('/Laporan', function () {
    return view('guru.Laporan');
});

Route::get('/nilai', function () {
    return view('guru.nilai');
});

Route::get('/kisikisiadmin', function () {
    return view('layout.kisikisiadmin');
});
Route::get('/paketsoaladmin', function () {
    return view('layout.paketsoaladmin');
});
Route::get('/indexselesai', function () {
    return view('layout.indexselesai');
});
Route::get('/registerguru', function () {
    return view('guru.registerguru');
});
Route::get('/forgetpassword', function () {
    return view('template.forgetpassword');
});

Route::get('/list-ujian', function () {
    return view('siswa.listujian');
});
Route::get('/kisikisiguru', function () {
    return view('guru.kisikisiguru');
});
Route::get('/kisikisisiswa', function () {
    return view('siswa.kisikisisiswa');
});
Route::get('/kisikisiadmin', function () {
    return view('siswa.kisikisiadmin');
});
Route::get('/index', function () {
    return view('layout.index');
});
Route::get('/registersiswa', function () {
    return view('siswa.registersiswa');
});
Route::get('/email', function () {
    return view('template.email');
});






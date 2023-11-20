<?php

use App\Http\Controllers\JadwalController;
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

Route::get('/index', function () {
    return view('layout.index');
});

Route::post('/insertJadwal', [JadwalController::class, 'insertjadwal']);
Route::get('/jadwal', [JadwalController::class, 'jadwal']);

Route::get('/template', function () {
    return view('template.templateadmin');
});
Route::get('/dataguru', function () {
    return view('layout.dataguru');
});
Route::get('/datasiswa', function () {
    return view('layout.datasiswa');
});

Route::get('/login', function () {
    return view('layout.login');
});
Route::get('/registersiswa', function () {
    return view('siswa.registersiswa');
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
Route::get('/jadwalguru', function () {
    return view('guru.jadwalguru');
});
Route::get('/jadwalsiswa', function () {
    return view('siswa.jadwalsiswa');
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





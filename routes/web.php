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
use App\Http\Controllers\PaketSoalController;
use App\Http\Controllers\DatapaketController;
use App\Http\Controllers\KisikisiguruController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\KisikisiController;
use App\Http\Controllers\PilihanController;


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

//
Route::post('/createguru', [RegisterguruController::class, 'insertregisterguru']);
Route::get('/dataguru', [GuruController::class, 'dataguru']);
Route::get('/dataguru/{id}/hapusdataguru', [GuruController::class, 'hapusdataguru']);
Route::get('/dataguru/{id}/edit', [GuruController::class, 'edit'] );
Route::post('/dataguru/{id}/edit', [GuruController::class, 'update'] );

Route::post('/createdatasiswa', [RegistersiswaController::class, 'insertregisterdatasiswa']);
Route::get('/datasiswa', [DatasiswaController::class, 'datasiswa']);
Route::get('/datasiswa/{id}/hapusdatasiswa', [DatasiswaController::class, 'hapusdatasiswa']);
Route::get('/datasiswa/{id}/edit', [DatasiswaController::class, 'edit'] );
Route::post('/datasiswa/{id}/edit', [DatasiswaController::class, 'update'] );

Route::get('/login', [LoginController::class, 'viewlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('actionlogin');

Route::post('/updatepassword/{id}', [ForgotpasswordController::class, 'update']);
Route::get('/forgotpassword/{id}', [ForgotpasswordController::class, 'forgotpassword']);
Route::post('/forgetpassword/{id}/update', [JadwalController::class, 'update']);
Route::post('/findaccount', [ForgotpasswordController::class, 'findaccount'] );

Route::post('/insertpaketsoal', [PaketSoalController::class, 'insertpaketsoal']);
Route::get('/paket', [PaketSoalController::class, 'paket']);
Route::get('/datapaket/paket/tambahpaketsoal', [SoalController::class, 'tambahpaketsoal']);


Route::get('/datapaket', [DatapaketController::class, 'datapaket']);
Route::post('/datapaket/{id}/update', [DatapaketController::class, 'update']);
Route::get('/datapaket/{id}/soal', [SoalController::class, 'datasoal']);
Route::get('/datapaket/{id}/soal/tambah', [SoalController::class, 'tambahdatasoal']);
Route::post('/insertsoal', [SoalController::class, 'insertsoal']);
Route::get('/datapaket/{id}/hapus', [DatapaketController::class, 'hapus']);
Route::get('/datapaket/{id}/hapussoal', [SoalController::class, 'hapussoal']);
Route::get('/datapaket/{id}/soal/tambahpilihan', [SoalController::class, 'tambahpilihan']);
Route::post('/insertpilihan', [PilihanController::class, 'insertpilihan']);

Route::get('/kisikisiguru', [KisikisiguruController::class, 'kisikisiguru']);
Route::post('/createkisikisi', [KisikisiguruController::class, 'createkisikisi']);

Route::get('/kisikisi', [KisikisiController::class, 'kisikisi']);
Route::get('/editkisikisi/{id}/edit', [KisikisiController::class, 'edit']);
Route::get('/kisikisi/{id}/hapuskisikisi', [KisikisiController::class, 'hapuskisikisi']);
Route::get('/kisikisi/{id}/updatekisikisi', [KisikisiController::class, 'updatekisikisi'] );



Route::get('/template', function () {
    return view('template.templateadmin');
});

Route::get('/indexguru', function () {
    return view('guru.indexguru');
});
Route::get('/templatelandingpage', function () {
    return view('template.templatelandingpage');
});
Route::get('/soal', function () {
    return view('guru.soal');
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






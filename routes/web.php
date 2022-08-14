<?php

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

//frontend
Route::get('/', [App\Http\Controllers\Frontend\homepageController::class, 'index'])->name('/');

Route::get('/berita', [App\Http\Controllers\Frontend\beritaController::class, 'seluruh_berita'])->name('berita');
Route::get('/baca-berita/{slug}', [App\Http\Controllers\Frontend\beritaController::class, 'detail'])->name('baca-berita');

Route::get('/agenda', [App\Http\Controllers\Frontend\agendaController::class, 'seluruh_agenda'])->name('agenda');

Route::get('/profil-desa', [App\Http\Controllers\Frontend\profilController::class, 'index'])->name('profil-desa');

Route::get('/data-desa', [App\Http\Controllers\Frontend\dataDesaController::class, 'index'])->name('data-desa');

Route::get('/kontak-desa', [App\Http\Controllers\Frontend\kontakDesaController::class, 'index'])->name('kontak-desa');

Route::get('/galeri-desa', [App\Http\Controllers\Frontend\galeriController::class, 'index'])->name('galeri-desa');

Route::get('/bumdes', [App\Http\Controllers\Frontend\bumdesController::class, 'index'])->name('bumdes');

Route::get('/pkk', [App\Http\Controllers\Frontend\pkkController::class, 'index'])->name('pkk');

// Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('desa', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-dashboard');
    Route::get('desa/profil', [App\Http\Controllers\Admin\ProfilController::class, 'index'])->name('admin-profil');

    Route::get('desa/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'index'])->name('admin-agenda');
    Route::get('desa/agenda/tambah', [App\Http\Controllers\Admin\AgendaController::class, 'add'])->name('admin-tambah-agenda');
    Route::post('desa/agenda', [App\Http\Controllers\Admin\AgendaController::class, 'create'])->name('admin-agenda-tambah');
    Route::get('desa/agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'edit'])->name('admin-agenda-edit');
    Route::put('desa/agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'update'])->name('admin-update-agenda');
    Route::delete('desa/agenda/{id}', [App\Http\Controllers\Admin\AgendaController::class, 'delete'])->name('admin-agenda-delete');

    Route::get('desa/profil-desa', [App\Http\Controllers\Admin\ProfilDesaController::class, 'index'])->name('admin-profil-desa');
    Route::get('desa/profil-desa/{id}', [App\Http\Controllers\Admin\ProfilDesaController::class, 'edit'])->name('admin-profil-desa-edit');
    Route::put('desa/profil-desa/{id}', [App\Http\Controllers\Admin\ProfilDesaController::class, 'update'])->name('admin-update-profil-desa');

    Route::get('desa/pendidikan', [App\Http\Controllers\Admin\DataPendidikanController::class, 'index'])->name('admin-pendidikan-desa');
    Route::get('desa/pendidikan/tambah', [App\Http\Controllers\Admin\DataPendidikanController::class, 'add'])->name('admin-tambah-pendidikan-desa');
    Route::post('desa/pendidikan', [App\Http\Controllers\Admin\DataPendidikanController::class, 'create'])->name('admin-pendidikan-desa-tambah');
    Route::get('desa/pendidikan/{id}', [App\Http\Controllers\Admin\DataPendidikanController::class, 'edit'])->name('admin-pendidikan-desa-edit');
    Route::put('desa/pendidikan/{id}', [App\Http\Controllers\Admin\DataPendidikanController::class, 'update'])->name('admin-update-pendidikan-desa');
    Route::delete('desa/pendidikan/{id}', [App\Http\Controllers\Admin\DataPendidikanController::class, 'delete'])->name('admin-pendidikan-desa-delete');

    Route::get('desa/kesehatan', [App\Http\Controllers\Admin\TenagaKesehatanController::class, 'index'])->name('admin-tenaga-kesehatan');
    Route::get('desa/kesehatan/tambah', [App\Http\Controllers\Admin\TenagaKesehatanController::class, 'add'])->name('admin-tambah-kesehatan');
    Route::post('desa/kesehatan', [App\Http\Controllers\Admin\TenagaKesehatanController::class, 'create'])->name('admin-kesehatan-tambah');
    Route::get('desa/kesehatan/{id}', [App\Http\Controllers\Admin\TenagaKesehatanController::class, 'edit'])->name('admin-kesehatan-edit');
    Route::put('desa/kesehatan/{id}', [App\Http\Controllers\Admin\TenagaKesehatanController::class, 'update'])->name('admin-update-kesehatan');
    Route::delete('desa/kesehatan/{id}', [App\Http\Controllers\Admin\TenagaKesehatanController::class, 'delete'])->name('admin-kesehatan-delete');

    Route::get('desa/peribadatan', [App\Http\Controllers\Admin\PeribadatanController::class, 'index'])->name('admin-peribadatan');
    Route::get('desa/peribadatan/tambah', [App\Http\Controllers\Admin\PeribadatanController::class, 'add'])->name('admin-tambah-peribadatan');
    Route::post('desa/peribadatan', [App\Http\Controllers\Admin\PeribadatanController::class, 'create'])->name('admin-peribadatan-tambah');
    Route::get('desa/peribadatan/{id}', [App\Http\Controllers\Admin\PeribadatanController::class, 'edit'])->name('admin-peribadatan-edit');
    Route::put('desa/peribadatan/{id}', [App\Http\Controllers\Admin\PeribadatanController::class, 'update'])->name('admin-update-peribadatan');
    Route::delete('desa/peribadatan/{id}', [App\Http\Controllers\Admin\PeribadatanController::class, 'delete'])->name('admin-peribadatan-delete');

    Route::get('desa/penduduk', [App\Http\Controllers\Admin\JumlahPendudukController::class, 'index'])->name('admin-penduduk');
    Route::get('desa/penduduk/tambah', [App\Http\Controllers\Admin\JumlahPendudukController::class, 'add'])->name('admin-tambah-penduduk');
    Route::post('desa/penduduk', [App\Http\Controllers\Admin\JumlahPendudukController::class, 'create'])->name('admin-penduduk-tambah');
    Route::get('desa/penduduk/{id}', [App\Http\Controllers\Admin\JumlahPendudukController::class, 'edit'])->name('admin-penduduk-edit');
    Route::put('desa/penduduk/{id}', [App\Http\Controllers\Admin\JumlahPendudukController::class, 'update'])->name('admin-update-penduduk');
    Route::delete('desa/penduduk/{id}', [App\Http\Controllers\Admin\JumlahPendudukController::class, 'delete'])->name('admin-penduduk-delete');

    Route::get('desa/geografi', [App\Http\Controllers\Admin\LetakGeografisController::class, 'index'])->name('admin-geografi');
    Route::get('desa/geografi/tambah', [App\Http\Controllers\Admin\LetakGeografisController::class, 'add'])->name('admin-tambah-geografi');
    Route::post('desa/geografi', [App\Http\Controllers\Admin\LetakGeografisController::class, 'create'])->name('admin-geografi-tambah');
    Route::get('desa/geografi/{id}', [App\Http\Controllers\Admin\LetakGeografisController::class, 'edit'])->name('admin-geografi-edit');
    Route::put('desa/geografi/{id}', [App\Http\Controllers\Admin\LetakGeografisController::class, 'update'])->name('admin-update-geografi');
    Route::delete('desa/geografi/{id}', [App\Http\Controllers\Admin\LetakGeografisController::class, 'delete'])->name('admin-geografi-delete');

    Route::get('desa/pemerintahan', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'index'])->name('admin-pemerintahan-desa');
    Route::get('desa/pemerintahan/tambah', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'add'])->name('admin-tambah-pemerintahan-desa');
    Route::post('desa/pemerintahan', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'create'])->name('admin-pemerintahan-desa-tambah');
    Route::get('desa/pemerintahan/{id}', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'edit'])->name('admin-pemerintahan-desa-edit');
    Route::put('desa/pemerintahan/{id}', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'update'])->name('admin-update-pemerintahan-desa');
    Route::delete('desa/pemerintahan/{id}', [App\Http\Controllers\Admin\StrukturPemerintahanController::class, 'delete'])->name('admin-pemerintahan-desa-delete');

    Route::get('desa/berita', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('admin-berita-desa');
    Route::get('desa/berita/tambah', [App\Http\Controllers\Admin\BeritaController::class, 'add'])->name('admin-tambah-berita-desa');
    Route::post('desa/berita', [App\Http\Controllers\Admin\BeritaController::class, 'create'])->name('admin-berita-desa-tambah');
    Route::get('desa/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'edit'])->name('admin-berita-desa-edit');
    Route::put('desa/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'update'])->name('admin-update-berita-desa');
    Route::delete('desa/berita/{id}', [App\Http\Controllers\Admin\BeritaController::class, 'delete'])->name('admin-berita-desa-delete');

    Route::get('desa/galeri', [App\Http\Controllers\Admin\GaleriController::class, 'index'])->name('admin-galeri-desa');
    Route::get('desa/galeri/tambah', [App\Http\Controllers\Admin\GaleriController::class, 'add'])->name('admin-tambah-galeri-desa');
    Route::post('desa/galeri', [App\Http\Controllers\Admin\GaleriController::class, 'create'])->name('admin-galeri-desa-tambah');
    Route::get('desa/galeri/{id}', [App\Http\Controllers\Admin\GaleriController::class, 'edit'])->name('admin-galeri-desa-edit');
    Route::put('desa/galeri/{id}', [App\Http\Controllers\Admin\GaleriController::class, 'update'])->name('admin-update-galeri-desa');
    Route::delete('desa/galeri/{id}', [App\Http\Controllers\Admin\GaleriController::class, 'delete'])->name('admin-galeri-desa-delete');
});
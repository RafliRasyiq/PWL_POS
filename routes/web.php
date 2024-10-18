<?php

use App\Htpp\Controller\UserController as ControllerUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Database\Seeders\KategoriSeeder;
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

Route::pattern('id', '[0-9]+'); // artinya ketika ada parameter {id}, maka harus berupa angka

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postlogin']);
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store']);

Route::middleware(['auth'])->group(function(){

    Route::get('/', [WelcomeController::class, 'index']);

    Route::group(['prefix' => 'user'], function(){
        Route::get('/', [UserController::class, 'index']); //menampilkan halaman awal user
        Route::post('/list', [UserController::class, 'list']); //menampilkan data user dalam bentuk json untuk datatables
        Route::get('/create', [UserController::class, 'create']); //menampilkan halaman form tambah user
        Route::post('/', [UserController::class, 'store']); //menyimpan data user baru
        Route::get('/create_ajax', [UserController::class, 'create_ajax']); //menampilkan halaman form tambah user Ajax
        Route::post('/ajax', [UserController::class, 'store_ajax']); //menyimpan data user baru Ajax
        Route::get('/{id}', [UserController::class, 'show']); //menampilkan detail user
        Route::get('/{id}/edit', [UserController::class, 'edit']); //menampilkan halaman form edit user
        Route::put('/{id}', [UserController::class, 'update']); //menampilkan perubahan data user
        Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); //Menampilkan halaman form edit user Ajax
        Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); //Menampilkan halaman form edit user Ajax
        Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']); //untuk menampilkan form confirm delete user Ajax
        Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']); //untuk menampilkan form confirm delete user Ajax
        Route::get('/import', [UserController::class, 'import']);
        Route::post('/import_ajax', [UserController::class, 'import_ajax']);
        Route::get('/export_excel', [UserController::class, 'export_excel']); // export excel
        Route::get('/export_pdf', [UserController::class, 'export_pdf']);
        Route::delete('/{id}', [UserController::class, 'destroy']); //menghapus data user
    });
    
    Route::middleware(['authorize:ADM'])->group(function(){
        Route::get('/level', [LevelController::class, 'index']);          // menampilkan halaman awal level
        Route::post('/level/list', [LevelController::class, 'list']);      // menampilkan data level dalam bentuk json untuk datatables
        Route::get('/level/create', [LevelController::class, 'create']);   // menampilkan halaman form tambah level
        Route::get('/level/create_ajax', [LevelController::class, 'create_ajax']);
        Route::post('/level', [LevelController::class, 'store']);         // menyimpan data level baru
        Route::post('/level/ajax', [LevelController::class, 'store_ajax']);
        Route::get('/level/import', [LevelController::class, 'import']);
        Route::post('/level/import_ajax', [LevelController::class, 'import_ajax']);
        Route::get('/level/export_excel', [LevelController::class, 'export_excel']); // export excel
        Route::get('/level/export_pdf', [LevelController::class, 'export_pdf']); // export pdf
        Route::get('/level/{id}/edit_ajax', [LevelController::class, 'edit_ajax']);
        Route::put('/level/{id}/update_ajax', [LevelController::class, 'update_ajax']);
        Route::get('/level/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);
        Route::delete('/level/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);
        Route::get('/level/{id}', [LevelController::class, 'show']);       // menampilkan detail level
        Route::get('/level/{id}/edit', [LevelController::class, 'edit']);  // menampilkan halaman form edit level
        Route::put('/level/{id}', [LevelController::class, 'update']);     // menyimpan perubahan data level
        Route::delete('/level/{id}', [LevelController::class, 'destroy']); // menghapus data level
    });
    
    Route::middleware(['authorize:ADM,MNG'])->group(function () {
        Route::get('/kategori', [KategoriController::class, 'index']); // menampilkan halaman awal kategori
        Route::post('/kategori/list', [KategoriController::class, 'list']); // menampilkan data kategori dalam bentuk json untuk datatables
        Route::get('/kategori/create', [KategoriController::class, 'create']); // menampilkan halaman form tambah kategori
        Route::get('/kategori/create_ajax', [KategoriController::class, 'create_ajax']);
        Route::post('/kategori', [KategoriController::class, 'store']); // menyimpan data kategori baru
        Route::post('/kategori/ajax', [KategoriController::class, 'store_ajax']);
        Route::get('/kategori/{id}', [KategoriController::class, 'show']); // menampilkan detail kategori
        Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']); // menampilkan halaman form edit kategori
        Route::put('/kategori/{id}', [KategoriController::class, 'update']); // menyimpan perubahan data kategori
        Route::get('/kategori/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']);
        Route::put('/kategori/{id}/update_ajax', [KategoriController::class, 'update_ajax']);
        Route::get('/kategori/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);
        Route::delete('/kategori/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);
        Route::get('/kategori/import', [KategoriController::class, 'import']);
        Route::post('/kategori/import_ajax', [KategoriController::class, 'import_ajax']);
        Route::get('/kategori/export_excel', [KategoriController::class, 'export_excel']); // export excel
        Route::get('/kategori/export_pdf', [KategoriController::class, 'export_pdf']); // export pdf
        Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']); // menghapus data kategori
    });
    
    Route::group(['prefix' => 'barang'], function () {
        Route::get('/', [BarangController::class, 'index']); // menampilkan halaman awal barang
        Route::post('/list', [BarangController::class, 'list']); // menampilkan data barang dalam bentuk json untuk datatables
        Route::get('/create', [BarangController::class, 'create']); // menampilkan halaman form tambah barang
        Route::get('/create_ajax', [BarangController::class, 'create_ajax']);
        Route::post('/', [BarangController::class, 'store']); // menyimpan data barang baru
        Route::post('/ajax', [BarangController::class, 'store_ajax']);
        Route::get('/{id}', [BarangController::class, 'show']); // menampilkan detail barang
        Route::get('/{id}/edit', [BarangController::class, 'edit']); // menampilkan halaman form edit barang
        Route::put('/{id}', [BarangController::class, 'update']); // menyimpan perubahan data barang
        Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);
        Route::get('/import', [BarangController::class, 'import']);
        Route::post('/import_ajax', [BarangController::class, 'import_ajax']);
        Route::get('/export_excel', [BarangController::class, 'export_excel']); // export excel
        Route::get('/export_pdf', [BarangController::class, 'export_pdf']); // export pdf
        Route::delete('/{id}', [BarangController::class, 'destroy']); // menghapus data barang
    });
    
    Route::middleware(['authorize:ADM,MNG'])->group(function () {
        Route::get('/', [SupplierController::class, 'index']); // menampilkan halaman awal supplier
        Route::post('/list', [SupplierController::class, 'list']); // menampilkan data supplier dalam bentuk json untuk datatables
        Route::get('/create', [SupplierController::class, 'create']); // menampilkan halaman form tambah supplier
        Route::get('/create_ajax', [SupplierController::class, 'create_ajax']);
        Route::post('/', [SupplierController::class, 'store']); // menyimpan data supplier baru
        Route::post('/ajax', [SupplierController::class, 'store_ajax']);
        Route::get('/{id}', [SupplierController::class, 'show']); // menampilkan detail supplier
        Route::get('/{id}/edit', [SupplierController::class, 'edit']); // menampilkan halaman form edit supplier
        Route::put('/{id}', [SupplierController::class, 'update']); // menyimpan perubahan data supplier
        Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);
        Route::delete('/{id}', [SupplierController::class, 'destroy']); // menghapus data supplier
    });
    
    Route::middleware(['authorize:ADM,MNG,STF'])->group(function () {
        Route::get('/', [StokController::class, 'index']); // menampilkan halaman awal stok
        Route::post('/list', [StokController::class, 'list']); // menampilkan data stok dalam bentuk json untuk datatables
        Route::get('/create', [StokController::class, 'create']); // menampilkan halaman form tambah stok
        Route::get('/create_ajax', [StokController::class, 'create_ajax']);
        Route::post('/', [StokController::class, 'store']); // menyimpan data stok baru
        Route::post('/ajax', [StokController::class, 'store_ajax']);
        Route::get('/{id}', [StokController::class, 'show']); // menampilkan detail stok
        Route::get('/{id}/edit', [StokController::class, 'edit']); // menampilkan halaman form edit stok
        Route::put('/{id}', [StokController::class, 'update']); // menyimpan perubahan data stok
        Route::get('/{id}/edit_ajax', [StokController::class, 'edit_ajax']);
        Route::put('/{id}/update_ajax', [StokController::class, 'update_ajax']);
        Route::get('/{id}/delete_ajax', [StokController::class, 'confirm_ajax']);
        Route::delete('/{id}/delete_ajax', [StokController::class, 'delete_ajax']);
        Route::delete('/{id}', [StokController::class, 'destroy']); // menghapus data stok
    });
});


<?php

use App\Models\spj;
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

// Route::get('/', function (Request $request) {

//     if($request->has('search')){
//         $s = spj::with('belanja')->where('program','%'.$request->search.'%','delstatus','=',1)->latest()->paginate(2);
//     }else{
//         $s = spj::with('belanja')->where('delstatus','=',1)->latest()->paginate(2);
//     }

//     return view('welcome',compact('s'));
// });

Route::get('/', [ App\Http\Controllers\SpjController::class,'Welcome' ]);


Route::get('/search-spj', [ App\Http\Controllers\SpjController::class,'search' ]);

Route::get('/Registrasi', [ App\Http\Controllers\LoginController::class,'registrasi' ]);
Route::post('/Simpan-Registrasi', [ App\Http\Controllers\LoginController::class,'simpanRegistrasi' ]);

Route::get('/Login', [ App\Http\Controllers\LoginController::class,'LoginHalaman' ])->name('login');
Route::post('/post-login', [ App\Http\Controllers\LoginController::class,'postlogin' ])->name('post-login');
//Route::get('/detail/{id}', [App\Http\Controllers\SpjController::class, 'details']);

Route::get('/Logout', [ App\Http\Controllers\LoginController::class,'LogOut' ]);


Route::middleware(['auth'])->group(function () {

Route::get('/Dasboard', [ App\Http\Controllers\BelanjaController::class,'Dasboard' ]);
//belanja
Route::get('/Belanja', [ App\Http\Controllers\BelanjaController::class,'TampilHalamanBelanja' ]);
Route::get('/Tambah_Belanja', [ App\Http\Controllers\BelanjaController::class,'TampilHalamanTambahBelanja' ]);
Route::post('/Simpan_Belanja', [ App\Http\Controllers\BelanjaController::class,'SimpanBelanja' ]);
Route::get('/Update_Belanja/{id}', [ App\Http\Controllers\BelanjaController::class,'TampilHalamanUpdateBelanja' ]);
Route::post('/Simpan/{id}', [ App\Http\Controllers\BelanjaController::class,'SimpanPerubahanBelanja' ]);
Route::get('/Hapus_Belanja/{id}', [ App\Http\Controllers\BelanjaController::class,'hapusBelanja' ]);

//bagian
Route::get('/Bagian', [ App\Http\Controllers\BagianController::class,'TampilHalamanBagian' ]);
Route::get('/Tambah_Bagian', [ App\Http\Controllers\BagianController::class,'TampilHalamanTambahBagian' ]);
Route::post('/Simpan_Bagian', [ App\Http\Controllers\BagianController::class,'SimpanBagian' ]);
Route::get('/Update-Bagian/{id}', [ App\Http\Controllers\BagianController::class,'TampilHalamanUpdateBagian' ]);
Route::post('/Simpan-Bagian/{id}', [ App\Http\Controllers\BagianController::class,'SimpanPerubahanBagian' ]);
Route::get('/Hapus-Bagian/{id}', [ App\Http\Controllers\BagianController::class,'hapusBagian' ]);

//SPJ
Route::get('/Spj', [ App\Http\Controllers\SpjController::class,'TampilHalamanSpj' ]);
Route::get('/Tambah_Spj', [ App\Http\Controllers\SpjController::class,'TambahSPJK' ]);
Route::post('/Simpan_SPJ', [ App\Http\Controllers\SpjController::class,'SimpanSPJ' ]);
Route::get('/Update_Spj/{id}', [ App\Http\Controllers\SpjController::class,'TampilHalamanUpdateSpj' ]);
Route::post('/Simpan_perSPJ/{id}', [ App\Http\Controllers\SpjController::class,'SimpanPerubahanSpj' ]);
Route::get('/Hapus_Spj/{id}', [ App\Http\Controllers\SpjController::class,'hapusSpj' ]);

//doc
// Route::get('/Dokumen', [ App\Http\Controllers\docController::class,'tampiluploadDoc' ]);
Route::get('/Dokumen', [ App\Http\Controllers\docController::class,'singletambahdoc' ]);
Route::get('/Tabel_Dokumen', [ App\Http\Controllers\docController::class,'tampilhalamandDoc' ]);
Route::post('/Simpan_Doc', [ App\Http\Controllers\docController::class,'SimpanDoc' ]);
Route::get('/Single-Dokumen', [ App\Http\Controllers\docController::class,'tampilDoc' ]);
Route::get('/docdetail/{id}', [App\Http\Controllers\docController::class, 'singledoc']);
Route::get('/Single-TambahDokumen/{id}', [ App\Http\Controllers\docController::class,'singletambahdoc' ]);
Route::get('/Lihat-Dok', [ App\Http\Controllers\docController::class,'tampilLihatdDoc' ]);


});

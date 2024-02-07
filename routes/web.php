<?php

use App\Http\Controllers\Chart;
use App\Http\Controllers\logC;
use App\Http\Controllers\loginC;
use App\Http\Controllers\obat;
use App\Http\Controllers\record as recordC;
use App\Http\Controllers\siswa;
use App\Http\Controllers\userC as user;
use Illuminate\Support\Facades\Route;
//--------------------------------------------------------------------

Route::get('/pulang/{id}', [recordC::class, 'pdf'])->name('recrd.pdf');//PDF STRUK 
Route::get('record/all', [recordC::class, 'all'])->name('record.all'); //MENAMPILKAN PILIHAN TAGGAL PDF 
Route::get('/pertanggal/{tgl_awal}/{tgl_akhir}', [recordC::class, 'pertanggal'])->name('record.pertanggal'); //PDF PERTANGGAL
// //CRUD SISWA
Route::get('log', [logC::class, 'index'])->name('log.index');
//CRUD SISWAmiddleware
Route::get('user', [User::class, 'index'])->name('user.index');
Route::get('user/create', [user::class, 'create'])->name('user.create'); //SHOW TABEL
Route::post('user/store', [user::class, 'store'])->name('user.store'); //UPLODE DATA PAGE
Route::get('user/edit/{id}', [user::class, 'edit'])->name('user.edit'); //SHOW PAGE EDIT
Route::put('/user/update/{id}', [user::class, 'update'])->name('user.update');//UPLODE DATA
Route::delete('/user/delete/{id}', [user::class, 'destroy'])->name('user.destroy'); //HAPUS
Route::get('user/changepassword/{id}', [user::class, 'changepassword'])->name('user.changepassword'); //SHOW PAGE EDIT
Route::put('/user/change/{id}', [user::class, 'change'])->name('user.change');//UPLODE DATA

//CRUD OBAT SISWA
Route::resource('obat', obat::class);
Route::resource('dashboard', Chart::class);
Route::resource('/', Chart::class);
Route::resource('siswa', siswa::class);

//CRUD RECORD
Route::get('record', [recordC::class, 'index'])->name('record.index'); //SHOW TABEL
Route::get('record/create', [recordC::class, 'create'])->name('record.create');
Route::post('record/store', [recordC::class, 'store'])->name('record.store');
Route::get('record/edit/{id}', [recordC::class, 'edit'])->name('record.edit');
Route::put('/record/update/{id}', [recordC::class, 'update'])->name('record.update');
Route::get('record/periksa/{id}', [recordC::class, 'periksa'])->name('record.periksa');
Route::put('/record/siswa/{id}', [recordC::class, 'siswa'])->name('record.siswa');
Route::delete('/record/delete/{id}', [recordC::class, 'destroy'])->name('record.destroy');


//LOGIN
Route::get('login', [loginC::class, 'login'])->name('login'); //HALAMAN LOGIN
Route::post('login', [loginC::class, 'login_action'])->name('login.action'); //LOGIN 

//LOGOUT
Route::get('logout', [loginC::class, 'logout'])->name('logout'); //LOGOUT
//VIEW
// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/all', function () {
    return view('all');
});

Route::get('/error', function () {
    return view('error');
});

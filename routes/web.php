<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
//dengan middleware user
// Route::prefix('/')->middleware('checkAuth')->group(function(){
//     Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
//     Route::resource('reports',ReportController::class);
//     Route::resource('users',UserController::class)->middleware('checkAdmin');
// });
// Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
// Route::resource('reports',ReportController::class);
// Route::resource('users',UserController::class);
//versi tanpa middleware
// Route::get('/logs',[LogController::class,'index'])->name('logIndex');
// Route::get('/download/{id}',[ReportController::class,'download'])->middleware('checkAdmin')->name('report.download');
// Route::get('/test', [ReportController::class,'indexAdmin'])->name('reportIndexAdmin')->middleware('checkAdmin');
// Route::fallback(function () {
//     return view('auth.login2');
// });
//Untuk baca file yang ada di direktori user
Route::get('/beranda', function (Request $request) {
    return view('user.beranda',['email'=>Auth::user()->email]);
})->name('beranda');
Route::get('/informasi', function (Request $request) {
    return view('user.informasi',['email'=>Auth::user()->email]);
});
Route::get('/upload-kegiatan',[ReportController::class,'uploadKegiatan'])->name('upload-kegiatan');
// Route::get('/laporan-kegiatan', function (Request $request) {
//     return view('user.laporan-kegiatan');
// });
Route::post('/store-kegiatan',[ReportController::class,'store'])->name('storeKegiatan');
Route::get('/laporan-kegiatan',[ReportController::class,'indexDatatable'])->name('indexDatatable');
Route::get('/login', function (Request $request) {
    return view('user.login');
});
Route::prefix('/index',function (Request $request){
    return view('user.login');
});
Route::get('/index-admin', function(Request $request){
    return view('admin.index');
});
Route::get('laporan-kegiatan-json',[ReportController::class,'getJson'])->name('getJson');
Route::get('oke',[ReportController::class,'store']);



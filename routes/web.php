<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



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
// Route::get('/test', [ReportController::class,'indexAdmin'])->name('reportIndexAdmin')->middleware('checkAdmin');

//Untuk baca file yang ada di direktori user


// Route::get('/laporan-kegiatan', function (Request $request) {
//     return view('user.laporan-kegiatan');
// });

//Saat akses ke route yang tidak terdefinisi
Route::fallback(function () {
    return view('404');
});

//Autentikasi
Route::get('/', function (Request $request) {
    return view('user.login');
});
Route::get('/login', function (Request $request) {
    return view('user.login');
})->name('login');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');


Route::middleware(['checkAuth'])->group(function () {

    //Section Normal User
    Route::middleware(['checkUser'])->group(function () {
        Route::get('/beranda', function (Request $request) {
            return view('user.beranda', ['email' => Auth::user()->email]);
        })->name('beranda');
        Route::get('/informasi', function (Request $request) {
            return view('user.informasi', ['email' => Auth::user()->email]);
        });
        Route::get('/informasi', [InformationController::class, 'userInformation'])->name('user.information');
        Route::get('/upload-kegiatan', [ReportController::class, 'uploadKegiatan'])->name('upload-kegiatan');
        Route::post('/store-kegiatan', [ReportController::class, 'store'])->name('storeKegiatan');
        Route::get('/laporan-kegiatan', [ReportController::class, 'indexDatatable'])->name('indexDatatable');
    });

    //Section Admin
    Route::middleware(['checkAdmin'])->group(function () {
        Route::get('reports/{id}/edit', [ReportController::class, 'edit']);
        Route::get('/download/{id}', [ReportController::class, 'download'])->name('report.download');
        // Route::get('/index-admin', function(Request $request){
        //     return view('admin.index');
        // })->name('admin.index');
        // Route::get('/edit/{id}',[InformationController::class,'edit'])->name('information.edit'); susah
        Route::get('/delete/{id}', [InformationController::class, 'delete'])->name('information.delete');
        Route::post('/store-kategori', [KategoriController::class, 'store'])->name('kategori.store');
        Route::post('/store-information', [InformationController::class, 'store'])->name('information.store');
        Route::get('/index-admin', [ReportController::class, 'indexAdmin'])->name('admin.index');
        Route::get('/log', [LogController::class, 'log'])->name('admin.log');
        Route::get('/laporan-kegiatan-json', [ReportController::class, 'getJson'])->name('getJson');
        Route::get('/prodi', [ReportController::class, 'prodi'])->name('admin.prodi');
        // return view('admin.prodi');
        Route::get('/admin-informasi', [InformationController::class, 'adminInformation'])->name('admin.informasi');
        // Route::get('/admin-informasi',function(Request $request){
        //     return view('admin.informasi');
        // })->name('admin.informasi');
    });
});
// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
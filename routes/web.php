<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogController;
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
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('login2', [AuthController::class, 'index2'])->name('login2');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
Route::prefix('/')->middleware('checkAuth')->group(function(){
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard'); 
    Route::resource('reports',ReportController::class);
    Route::resource('users',UserController::class)->middleware('checkAdmin');
});
Route::get('/logs',[LogController::class,'index'])->name('logIndex');
Route::get('/download/{id}',[ReportController::class,'download'])->middleware('checkAdmin')->name('report.download');
Route::get('/test', [ReportController::class,'indexAdmin'])->name('reportIndexAdmin')->middleware('checkAdmin');
Route::fallback(function () {
    return view('auth.login2');
});

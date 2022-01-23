<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControl;
use App\Http\Controllers\TableCompanyControl;
use App\Http\Controllers\TablekaryawanControl;

use Illuminate\Routing\RouteGroup;

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

// Route Grup for auth
Route::group(['middleware' => ['auth']], function(){
    //route For home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Route For TABLES COMPANY
    Route::get('/company', [TableCompanyControl::class, 'index'])->name('company');

    // CRUDS Company
    Route::get('/Crcompany', [TableCompanyControl::class, 'create'])->name('Crcompany');
    Route::post('/submitcompany', [TableCompanyControl::class, 'store'])->name('submitcompany');
    Route::get('/editcompany/{id}', [TableCompanyControl::class, 'edit'])->name('editcompany');
    Route::put('/updatecompany/{id}', [TableCompanyControl::class, 'update'])->name('updatecompany');
    Route::get('/deletecompany/{id}', [TableCompanyControl::class, 'delete'])->name('deletecompany');
    
    
    // Route For TABLES KARYAWAN
    Route::get('/karyawan', [TablekaryawanControl::class, 'index'])->name('karyawan');
    
    // CRUDS KARYAWAN
    Route::get('/Crkaryawan', [TablekaryawanControl::class, 'create'])->name('Crkaryawan');
    Route::post('/submitkaryawan', [TablekaryawanControl::class, 'store'])->name('submitkaryawan');
    Route::get('/editkaryawan/{id}', [TablekaryawanControl::class, 'edit'])->name('editkaryawan');
    Route::put('/updatekaryawan/{id}', [TablekaryawanControl::class, 'update'])->name('updatekaryawan');
    Route::get('/deletekaryawan/{id}', [TablekaryawanControl::class, 'delete'])->name('deletekaryawan');
    
   
    // Route for button, 
    Route::get('/buttons', function(){
        return view('buttons', [
            'title' => 'Mini CRM with Laravel | Buttons'
        ]);
    });
    
    
    
});


// route for lost password page
Route::get('/lostpass', function () {
    return view('lostpass', [
        'title' => 'Mini CRM with Laravel | lost password'
    ]);
})->middleware('guest');

// Route for login and Log out control
Route::get('/login', [LoginControl::class, 'index'])->name('login')->middleware('guest');
Route::post('/postlog', [LoginControl::class, 'postlog'])->name('postlog');
Route::get('/postlogout', [LoginControl::class, 'postlogout'])->name('postlogout');







// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\BillofladingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShipperController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DashboardContraller;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShipmentTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WarehouseController;
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



Route::get('/dashboard', DashboardContraller::class)->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/', DashboardContraller::class);
    Route::get('billofladings/print/{id}',[ BillofladingController::class,'printpage'])->name('billofladings.printpage');
     Route::get('profile/',[ ProfileController::class,'index'])->name('profile.index');
     Route::put('profile/update/{id}',[ ProfileController::class,'update'])->name('profile.update');
    Route::resource('billofladings', BillofladingController::class);
    Route::resource('shippers', ShipperController::class);
    Route::resource('settings', SettingController::class);
    Route::resource('countries', CountryController::class);
    Route::resource('warehouses', WarehouseController::class);
    Route::get('warehouses/print/{id}',[ WarehouseController::class,'printpage'])->name('warehouses.printpage');
    Route::resource('freight-agents', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('shipment-types', ShipmentTypeController::class);

});




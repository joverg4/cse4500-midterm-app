<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\EquipmentinfoController;
use App\Http\Controllers\PurchaseinfoController;
use App\Http\Controllers\NoteshistoryController;

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

URL::forceScheme('https');

Route::resource('/customers', CustomersController::class);
Route::resource('/manuinfo', ManufacturerController::class);
Route::resource('/equipmentinfo', EquipmentinfoController::class);
Route::resource('/purchaseinfo', PurchaseinfoController::class);
Route::resource('/note', NoteshistoryController::class);

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/', function () {
    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Data2Controller;
use App\Http\Controllers\BarcodeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function (){
    return view('dashboard');
});



Route::get('dropdownlist',[Data2Controller::class, 'getCountries']);


Route::get('dropdownlist/getstates/{id}',[Data2Controller::class, 'getStates']);
Route::get('dropdownlist/getkecamatan/{id}',[Data2Controller::class, 'getKecamatan']);
Route::get('dropdownlist/getkelurahan/{id}',[Data2Controller::class, 'getKelurahan']);
Route::get('dropdownlist/getkodepos/{id}',[Data2Controller::class, 'getKodepos']);

Route::get('dropdownlist1',[Data2Controller::class, 'getCountries1']);

Route::post('customerstore1', [Data2Controller::class, 'customer_store1']);
Route::post('customerstore2',  [Data2Controller::class, 'customer_store2']);

Route::get('barcode', [BarcodeController::class, 'barcode']);
Route::get('pdf-barcode/{id}', [BarcodeController::class, 'pdf_barcode']);
Route::get('test-barcode', [BarcodeController::class, 'test_barcode']);

Route::get('indexdropdown', [Data2Controller::class, 'index']);
Route::get('indexdropdown1', [Data2Controller::class, 'index1']);
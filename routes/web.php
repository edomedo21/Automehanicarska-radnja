<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutaController;
use App\Http\Controllers\KorisniciController;
use App\Http\Controllers\DijeloviController;

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

/*Route::get('/', function () {
    return view('welcome');
}); */


/*
Route::middleware(['auth:sanctum', 'verified'])->get('/auta', function () {
    return view('auta.index');
})->name('auta');
*/



Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('pocetna.index');
})->name('pocetna');

Route::middleware(['auth:sanctum', 'verified'])->get('/upiti', function () {
    return view('upiti.index');
})->name('upiti');

Route::middleware(['auth:sanctum'])->get('auta',[AutaController::class,'index'])->name('auta');
Route::middleware(['auth:sanctum'])->get('upiti',[AutaController::class,'upiti'])->name('upiti');
Route::middleware(['auth:sanctum'])->get('dodaj_auto',[AutaController::class,'create'])->name('dodaj_auto');
Route::middleware(['auth:sanctum'])->get('dodaj_dio',[DijeloviController::class,'create'])->name('dodaj_dio');
Route::middleware(['auth:sanctum'])->post('spremi_auto',[AutaController::class,'store'])->name('spremi_auto');
Route::middleware(['auth:sanctum'])->post('spremi_dio',[DijeloviController::class,'store'])->name('spremi_dio');
Route::middleware(['auth:sanctum'])->get('korisnici',[KorisniciController::class,'index'])->name('korisnici');
Route::middleware(['auth:sanctum'])->get('dijelovi',[DijeloviController::class,'index'])->name('dijelovi');
Route::middleware(['auth:sanctum','verified'])->post('obrisi_auto',[AutaController::class,'delete'])->name('obrisi_auto');
Route::middleware(['auth:sanctum','verified'])->post('uredi_auto',[AutaController::class,'edit'])->name('uredi_auto');
Route::middleware(['auth:sanctum','verified'])->post('update_auto',[AutaController::class,'update'])->name('update_auto');



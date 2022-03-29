<?php

use App\Http\Controllers\ControllerUsers;
use App\Http\Controllers\ControladorApartaments;
use App\Http\Controllers\ControladorClients;
use App\Http\Controllers\ControladorImpressio;
use App\Http\Controllers\ControladorLloguers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\loginMail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::middleware('auth')->group(function () {

    Route::group(['middleware' => ['auth', 'C']], function () {
        Route::resource('users', ControllerUsers::class);
    });

    Route::get('/menu', function () {
        return view('menu');
    })->name('menu');;
    Route::resource('apartaments', ControladorApartaments::class);
    Route::resource('clients', ControladorClients::class);
    Route::resource('lloguers', ControladorLloguers::class);

});

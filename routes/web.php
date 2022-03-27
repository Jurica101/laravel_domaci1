<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OsiguranjeController;

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

// kada netko dođe narutu /home, neka mu se servira kontroler OsiguranjeController i njegova metoda show
Route::get('/home', [OsiguranjeController::class, 'show']);

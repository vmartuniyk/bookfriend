<?php

use App\Http\Controllers\BookCreateController;
use App\Http\Controllers\BookStoreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterIndexController;
use Illuminate\Support\Facades\Route;
use volodimir\Dns\DnsPlugin;

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

Route::get('/', HomeController::class);
Route::get('/test', function (){
    $dns = new DnsPlugin;
    $data = $dns->getAllDnsRecords('gmail.com');
    print_r($data);



});

Route::get('/auth/register', RegisterIndexController::class);
Route::get('/auth/login', LoginController::class);

Route::post('/books', BookStoreController::class);
Route::get('/books/create', BookCreateController::class);

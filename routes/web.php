<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;

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
    echo "Mensagem";
    #return view('welcome');
});*/

Route::get('/', [Controller::class, 'homepage']);

Route::get('/geoip',function(){
    $geoipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    return $geoipInfo->toArray();

});

/*Route::get('/geoip',function(){
    $geoipInfo = geoip()->getClientIp($_SERVER['REMOTE_ADDR']);
    return $geoipInfo()->getIp();

});*/

Route::get('/posts', [PostController::class, 'index']);


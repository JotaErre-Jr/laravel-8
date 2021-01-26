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
Route::get('/geoip', [Controller::class, 'getUserIpAddr']);

//Rota tras todas as informações
/*Route::get('/geoip',function(){
    $geoipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
    return $geoipInfo->toArray();

});*/

//Rota traz apenas o IP
/*Route::get('/geoip',function(){
    $geoipInfo = geoip()->getClientIp($_SERVER['REMOTE_ADDR']);
    return $geoipInfo;

});*/

/*Route::get('/geoip',function(Request $request){
    return $request->ip();


});/*

Route::get('/posts', [PostController::class, 'index']);


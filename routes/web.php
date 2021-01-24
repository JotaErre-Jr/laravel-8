<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
<<<<<<< HEAD

=======
>>>>>>> e103c649e25e78f6e15689bb92394d283f892e49
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

<<<<<<< HEAD
Route::get('/posts', [PostController::class, 'index']);
//Route::get('/', [Controller::class, 'homepage']);
=======
Route::get('/', [Controller::class, 'homepage']);
Route::get('/posts', [PostController::class, 'index']);
>>>>>>> e103c649e25e78f6e15689bb92394d283f892e49

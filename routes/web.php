<?php
use App\Http\Controllers\logic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/hello ', function () {
//     return view('Layout/hello');
// });
route::view("/hello","/Layout/hello");

Route::get('/getdata', function () {
    return $data = ['hello','apple','orange'];
});
route::post('/savedata',[logic::class,'save']);

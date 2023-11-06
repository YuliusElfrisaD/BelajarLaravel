<?php

use Illuminate\Http\Request;
use App\Http\Controllers\controller_daftar_pegawai;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::apiResource('gaji', controller_daftar_pegawai::class);

Route::get('/gaji', 'controller_daftar_pegawai@index');

// Route::get('/gaji/{id}', 'controller_daftar_pegawai@show');

// Route::get('/Gaji', function() {
//     dd('test woi');
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

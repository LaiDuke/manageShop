<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;
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
//    $conTroll = new ProductsController();
//    $ls = $conTroll->index();
//    foreach ($ls as $l) {
//        dd($l->name);
//    }
//    dd(gettype($ls));
    return view("test");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

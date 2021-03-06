<?php

use Illuminate\Support\Facades\Route;

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
    return View('pages.home');
});

Route::view('/createcompany','pages.insertcompany');
Route::post('submit', 'App\Http\Controllers\CompanyInsertController@save');


Route::get('/customers', function(){
$customer = DB::table('customers')->latest()->get();
	return View::make('pages.customers',['customer' => $customer]);
});

Route::get('/customers/{id}', function($id){
$customer = DB::table('customers')->find($id);
	return View::make('pages.details',['customer' => $customer]);
});




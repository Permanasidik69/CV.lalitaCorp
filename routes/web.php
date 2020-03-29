<?php

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
    return redirect('/home');
});


Route::group(['middleware'=>'auth'],function(){

    //ORDER ONLINE
    Route::resource('/Order-Online-ADV','Order_Online_ADV_Controller');
    Route::resource('/Order-Online-HOBIMEN','Order_Online_HOBIMEN_Controller');
    Route::resource('/Order-Online-OROKKIDS','Order_Online_OROKKIDS_Controller');

    //ORDER BARANG
    Route::resource('/Data-Supplier','Supplier_Controller');
    Route::resource('/Form-Order-Barang','Form_Order_Controller');

    //PERSEDIAAN BARANG
    
 
});

Route::get('/keluar', function(){
    \Auth::logout();

    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

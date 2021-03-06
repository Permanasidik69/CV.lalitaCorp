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

    //ORDER BARANG ATK
    Route::resource('/Data-Supplier','Supplier_Controller');
    Route::resource('/Purchase-Order-ATK','Form_Order_ATK_Controller');

    //PERSEDIAAN BARANG ATK
    Route::resource('Barang-ATK', 'MasterData_ATK_Controller');

//-----------------------------------------------------------------------------------------------------------------------//

    //ORDER BARANG PENJUALAN
    Route::resource('/Purchase-Order-ADV','Form_Order_ADV_Controller');
    Route::resource('/Purchase-Order-HOBIMEN','Form_Order_HOBIMEN_Controller');
    Route::resource('/Purchase-Order-OROKKIDS','Form_Order_OROKKIDS_Controller');

    //PERSEDIAAN BARANG PENJUALAN
    Route::resource('/Stok-Barang-ADV','MasterData_ADV_Controller');
    Route::resource('/Stok-Barang-HOBIMEN','MasterData_HOBIMEN_Controller');
    Route::resource('/Stok-Barang-OROKKIDS','MasterData_OROKKIDS_Controller');

    
 
});

Route::get('/keluar', function(){
    \Auth::logout();

    return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users_Controller ;
use App\Http\Controllers\categoriess_Controller ;
use App\Http\Controllers\brands_controller ;
use App\Http\Controllers\customers_controller ;
use App\Http\Controllers\Order_controller ;
use App\Http\Controllers\products_controller ;
use App\Http\Controllers\Order_Items_Controller ;
use App\Http\Controllers\stock_movements_controller ;


Route::get('/', function () {
    return view('layout');
});


Route::resource('/users', Users_Controller::class);

Route::resource('/categoriess', categoriess_Controller::class);

Route::resource('/brands', brands_controller::class);

Route::resource('/customers', customers_controller::class);

Route::resource('/orders', Order_controller::class);

Route::resource('/products', products_controller::class);

Route::resource('/order_items', Order_Items_Controller::class);

Route::resource('/stock_movements', stock_movements_controller::class);







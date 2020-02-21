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

Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products', 'ProductsController@index')->name('products.index');
Route::get('products/{product}', 'ProductsController@show')->name('products.show');
Auth::routes();

//验证
Auth::routes(['verify' => true]);

//收货地址  auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    //添加收货地址页面
	Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
	//提交收货地址表单
	Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
	Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
	//提交修改地址
	Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
	//删除地址
	Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');
});


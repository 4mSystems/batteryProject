<?php


//main Rote
// Route::get('/','HomeController@index');
// Route::get('read_more/{id}/{text}','HomeController@readMore');

Route::group(['prefix' => 'admin'], function ()
{
    Auth::routes();
    Route::get('home', 'Admin\HomeController@home');

});

Route::get('/','HomeController@index');
Route::get('product_view/{id}/view','HomeController@show_datails');



Route::resource('Products', 'Admin\productsController');
Route::get('product/{id}/edit', 'Admin\productsController@edit');
Route::get('product/{id}/delete', 'Admin\productsController@destroy');

Route::get('product/{id}/details', 'Admin\productsController@View_Product_details');
Route::post('storeDetail/{id}', 'Admin\productsController@store_Product_details');

Route::post('gallery/{id}','Admin\productsController@storeGallary');
Route::post('destroyGallery','Admin\productsController@destroyGallary');


Route::resource('user', 'Admin\usersController');
Route::get('updateUser', 'Admin\usersController@update');







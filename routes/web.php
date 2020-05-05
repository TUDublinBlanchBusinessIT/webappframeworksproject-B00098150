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
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home','memberController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::get('products/additem/{id}', 'productController@additem')->name('products.additem');

Route::get('products/displaygrid', 'productController@displaygrid')->name('products.displaygrid');

Route::get('products/additem/{id}', 'productController@additem')->name('products.additem');

Route::get('scorders/checkout', 'scorderController@checkout')->name('scorders.checkout');

Route::post('scorders/placeorder', 'scorderController@placeorder')->name('scorders.placeorder');

Route::get('products/emptycart', 'productController@emptycart')->name('products.emptycart');

Route::get('/customers/new', 'CustomerController@new');
Route::post('/customers/create', 'CustomerController@create')->name('customers.create'); 

Route::get('/customers/edit/{id}', 'CustomerController@edit');
Route::post('/customers/update', 'CustomerController@update');

Route::get('/calendar/display/','CalendarController@display')->name('calender.display');

Route::post('/calendar/json', 'CalendarController@json')->name('calendar.json');




//Route::resource('scorders', 'scorderController');

//Route::resource('products', 'productController');

//Route::resource('orderdetails', 'orderdetailController');



Route::resource('members', 'memberController');

Route::resource('bookings', 'bookingController');
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
Route::middleware(['access'])->group(function () {
});

Auth::routes();
Route::get('/adminSpace', 'HomeController@showAdmin')->name('showAdmin');
Route::post('/brand/add', 'BrandController@addBrand')->name('addBrand');
Route::post('/brand/delete', 'BrandController@deleteBrand')->name('deleteBrand');
Route::post('/car/add', 'CarController@addCar')->name('addCar');
Route::post('/car/edit', 'CarController@editCar')->name('editCar');
Route::post('/car/delete', 'CarController@deleteCar')->name('deleteCar');
Route::get('/booking/accept/{id}', 'BookingController@acceptBooking')->name('acceptBooking');
Route::get('/booking/refuse/{id}', 'BookingController@refuseBooking')->name('refuseBooking');

Route::post('/car/search', 'CarController@searchCars')->name('searchCars');
Route::get('/booking/showBeforeConfirm/{car_id}/{sortie}/{retour}','BookingController@showSignUpAndBooking')->name('showSignUpAndBooking');
Route::post('/booking/confirm','BookingController@SignUpAndBooking')->name('SignUpAndBooking');
//route for AJAX
// Route::get('/getRequest', function(){
// 	if(Request::ajax()){
// 		return "getRequests loaded succefully";
// 	}
// });
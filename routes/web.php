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
    return view('/home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/locked', function () {
    return view('/locked');
});
Auth::routes();
Route::get('/editProductForm/{q}', 'editProductFormController@show');
Route::get('/editProductForm/delete/{q}', 'editProductFormController@destroy');
Route::get('/editOffer/{q}', 'editOfferController@show');
Route::get('/offer/show', 'offerController@show');
Route::get('/editOffer/delete/{q}', 'editOfferController@destroy');
Route::get('/shop/{q}', 'shopController@index');
Route::get('/shopDetails/{home}/{first}/{last}/{direction}', 'shopDetailsController@index');
Route::get('/editOfferPhotos/{cat}/{scat}/{p_off}/{oname}', 'editOfferPhotosController@index');
Route::get('/search', 'searchController@index');
Route::get('/custReview/delete/{q}', 'custReviewController@destroy');
Route::get('/custReviewShowLow/{q}', 'custReviewController@showLow');
Route::get('/custReviewShow/{q}', 'custReviewController@show');
Route::get('/dloc/delete/{q}', 'dlocController@destroy');
Route::resource('/', 'homeController');
Route::resource('/home', 'homeController');
Route::resource('/product', 'ProductController');
Route::resource('/editProductForm', 'editProductFormController');
Route::resource('/offer', 'offerController');
Route::resource('/editOffer', 'editOfferController');
Route::resource('/custReview', 'custReviewController');
Route::resource('/dloc', 'dlocController');
Route::resource('/lockWeb', 'lockWebController');

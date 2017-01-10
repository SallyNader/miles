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

Route::get('details',function(){


	return view('user.uploadUnit');
});

Route::get('home', function () {
	$countries=App\Country::all();
    return view('home',compact('countries'));
});


Route::get('index', function () {
    return view('index');
});



Route::get('about', function () {
	$countries=App\Country::all();
    return view('about',compact('countries'));
});
Route::get('contactus', function () {
	$countries=App\Country::all();
    return view('contactus',compact('countries'));
});

//find property for rent or buy


Route::get('properties-buy-rent/{country}','CountryController@findproperty');

//choose city
Route::get('choose-city/{country}/{status}/{category}','CityChooseController@show');

Route::get('choose-region/{city}/{country}/{status}/{category}','RegionChooseController@show');

Route::get('choose-project/{city}/{region}/{country}/{status}/{category}','ProjectChooseController@show');


Route::get('choose-property/{project}/{city}/{region}/{country}/{status}/{category}','PropertyChooseController@show');

Route::resource('unitdetail','UnitChooseController');
Route::get('search','SearchController@show');

Route::resource('profile','ProfileController');
Route::resource('uploadunit','UserUploadUnitController');
Route::resource('choose-city','CityChooseController');
//show contact with column


Route::get('controlcontact/show/{row}/{contact}','ContactControlController@show');

//edit contact with column


Route::get('controlcontact/edit/{row}/{contact}','ContactControlController@edit');



Route::put('controlcontact/update/{row}/{contact}','ContactControlController@update');

Route::get('controlcontact/delete/{column}/{contact}','ContactControlController@destroy');
//control

Route::resource('controlcategory','CategoryControlController');
Route::resource('controlcity','CityControlController');

Route::resource('controlcountry','CountryControlController');
Route::resource('controlproject','ProjectControlController');
Route::resource('controlregion','RegionControlController');
Route::resource('controltype','TypeControlController');
Route::resource('controlunit','UnitControlController');
Route::resource('controlvideo','VideoControlController');
Route::resource('controlcontact','ContactControlController');


//delete routes



Route::get('controlcategory/delete/{id}','CategoryControlController@destroy');

Route::get('controlcity/delete/{id}','CityControlController@destroy');


Route::get('controlcountry/delete/{id}','CountryControlController@destroy');

Route::get('controlproject/delete/{id}','ProjectControlController@destroy');


Route::get('controlregion/delete/{id}','RegionControlController@destroy');


Route::get('controltype/delete/{id}','TypeControlController@destroy');
Route::get('controlunit/delete/{id}','UnitControlController@destroy');
Route::get('controlvideo/delete/{id}','VideoControlController@destroy');




Auth::routes();

Route::get('index', 'HomeController@index');

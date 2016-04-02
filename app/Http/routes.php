<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('aboutus', function() {
	return view('aboutus');
});

Route::get('contact', function() {
	return view('contact');
});

Route::get('traders', function() {
	return view('traders');
});

Route::get('markingcolor/{category?}', function ($category = 'flowers') {
	$categories = [
		'flowers'=>'Flowers',
		'landscape'=>'Landscape',
		'abstract'=>'Abstract',
		'dance'=>'Dance',
		'lines'=>'Lines',
		'h-v'=>'H-V',
		'animals'=>'Animals'
	];	
	return view('markingcolor', compact('category','categories'));
});

Route::get('newsong', function() {
	return view('newsong');	
});

Route::get('paintings/{painting}', function(App\Painting $painting) {
	return view('painting', compact('painting'));	
});

Route::get('paintings', function() {
	return view('paintings');
});

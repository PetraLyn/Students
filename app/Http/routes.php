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
    return view('welcome');
});

Route::get('/students', function () {
   return\App\students::all();
});

Route::get('/about', function(){
	return view('about');
});




Route::get('/students','studentscontroller@index');   


// Route::get('/students', function () {
//    return\App\students::all();
// });



        


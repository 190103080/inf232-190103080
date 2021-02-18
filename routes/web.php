<?php

use Illuminate\Support\Facades\Route;

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

Route::get('route-example', function () {
    return 'Kenzhaliev Batyrkhan';
});

Route::get('id-example', function () {
    return '190103080';
});

Route::get('redirect-example', function() {
	return redirect("id-example");
});

Route::get('/post/{id}/{age?}', function ($id, $age = null) {
    return "Id number is: ".$id." Your age: ".$age;
}) -> where('age', '[\d]+');


Route::get('user/{id}/{name}', function ($id, $name) {
    return "Id is: ".$id.", ". "Name is: ".$name;
}) -> where(['id' => '[\d]+', 'name' => '[a-zA-Z]+']);


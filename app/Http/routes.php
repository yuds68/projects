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
	return view('main.main-page');
});

Route::get('/master', function () {
	return view('master.master');
});

Route::get('/parameter', function () {
	return view('parameter.parameter');
});

Route::get('/transaction', function () {
	return view('transaction.transaction');
});

Route::get('/report', function () {
	return view('report.report');
});

// Route::controller('barang', 'Master\Barang\BarangController');
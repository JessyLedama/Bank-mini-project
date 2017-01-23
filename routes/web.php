<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BankTransactions@balance');

Route::get('deposit', function () {
    return view('deposit');
});

Route::post('deposit', 'BankTransactions@deposit');

Route::post('withdraw', 'BankTransactions@withdraw');

Route::get('withdraw', function () {
    return view('withdraw');
});

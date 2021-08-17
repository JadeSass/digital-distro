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

Route::get('/', 'HomeController@index')->name('index');

Route::post('/affiliate/subscribe', function(){
    $email = request('email');

    Newsletter::subscribe($email, 'subscribers');
    Session::flash('subscribed', 'You have successfully subscribed to our newsletter.');
    return redirect()->away('https://mywa.link/jel7e29f');
});

Route::get('/access', 'HomeController@access')->name('access');

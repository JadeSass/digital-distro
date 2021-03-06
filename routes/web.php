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

Route::get('/home', 'HomeController@index')->name('index');

Route::get('/', 'HomeController@free')->name('free');


Route::post('/affiliate/subscribe', function(){
    $email = request('email');
    $name = request('name');

    Newsletter::subscribe($email, ['FNAME'=> $name], 'subscribers');
    
    return redirect()->to('https://wa.link/b3jv6z');
});


Auth::routes();

Route::get('/access', 'HomeController@access')->name('access');

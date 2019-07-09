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

Route::localizedGroup(function () {
	Route::get('/', function () {
        return view('main', [
            'titles' => \App\Titles::get(),
            'contacts' => \App\Contacts::find(1),
            'reviews' => \App\Reviews::get(),
            'privat' => \App\Conditions::find(1),
            'discont' => \App\Conditions::find(2),
            'portfolios' => \App\Portfolios::orderBy('numb', 'asc')->get(),
            'clients' => \App\Clients::find(1),
            'galleries' => \App\Galleries::find(1),
            'controller' => new \App\Http\Controllers\HomeController()
        ]);
	});
});

Auth::routes();

Route::get('/home', function () {
    return redirect('/admin');
});

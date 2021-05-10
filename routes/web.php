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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/model', function () {
    // $products = \App\Product::all();

    // $user = new \App\User();
    // $user = \App\User::find(41);
    // $user->name = 'Usuário Teste Editado';

    // $user->save();

    // return \App\User::where('name','Prof. Jeff Boehm')->get();
    // return \App\User::where('name','Prof. Jeff Boehm')->first();
    // return \App\User::paginate(10);

    /*    $user = \App\User::create([
        'name' => 'Caio',
        'email' => 'email002@gmail.com',
        'password' => bcrypt('123456')
    ]); */

    $user = \App\User::find(4);
    $user = $user->update([
        'name' => 'Nome alterado com update'
    ]);
    dd($user);
    // return \App\User::all();

    // return $products;
});

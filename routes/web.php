<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return response('<h1>Hello World</h1>')
    -> header('Content-Type', 'text/html');
}); 

Route::get('/posts/{id}', function ($id) {
    return response('This is post number ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Response $response){
    dd($response->name . ' ' . $response->city);

});

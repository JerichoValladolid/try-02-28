<?php

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
Route::get('/person', function () {
    return view('person', [
        'name' => 'Jericho',
        'age' => '20',
        'address' => 'Baao, Camarines Sur',
        'siblings' => [

            [
                'name' => 'Anne',
                'age' => '16'
            ],
            [
                'name' => 'Juan',
                'age' => '19'
            ],
        ]
    ]);
});

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
    return view('listings', [
        'heading' => 'Gigs Listings',
        'listing' =>  [
            [
                'id' => 1,
                'name' => 'Architect',
                'description' => 'Gigs are a simple way to make your life easier.',
                'location' => 'Boston, USA'
            ],
            [
                'id' => 2,
                'name' => 'Lawyer',
                'description' => 'Gigs are a simple way to make your life easier.',
                'location' => 'Boston, USA'
            ]
        ]
    ]);
});

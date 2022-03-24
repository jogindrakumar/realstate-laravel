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

// HOme page
Route::get('/', function () {
    return view('pages/home');
});


// single listing

Route::get('/listing/{slug}/{id}', function () {
    return view('pages/single-listing');
});

// show all listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages/listing');
})->name('listings');





// User Saved Listings

Route::get('/account', function () {
    return view('pages/saved-listings');
})->name('account');

// user show Status

Route::get('/account/show-status', function () {
    return view('pages/show-status');
})->name('show-status');





// admin route

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
],function(){
    Route::get('/', function () {
    return view('admin/dashboard');
})->name('dashboard');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

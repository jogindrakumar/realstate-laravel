<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\Photo;
use App\Http\Controllers\Admin\ListingController;
use App\Http\Controllers\Admin\PhotoController;

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

// admin route

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth','is_admin'],
    'as' => 'admin.'
],function(){
    Route::get('/', function () {
    return view('admin/dashboard');
})->name('dashboard');

Route::group([
    'prefix' => 'listings',
    'as' => 'listings.'
],function(){
    Route::get('/',[ListingController::class,'index'])->name('index'); 
    Route::get('/create',[ListingController::class,'create'])->name('create'); 
    Route::get('/{slug}/{id}/edit',[ListingController::class,'edit'])->name('edit'); 
    Route::post('/',[ListingController::class,'store'])->name('store'); 
    Route::put('/{slug}/{id}',[ListingController::class,'update'])->name('update'); 
    Route::get('/{slug}/{id}/delete',[ListingController::class,'destroy'])->name('delete'); 

    // starting Listing photos
    Route::get('/{slug}/{id}/photos',[PhotoController::class,'index'])->name('photos'); 
    Route::get('/{slug}/{id}/photos/create',[PhotoController::class,'create'])->name('photos.create');
    Route::post('/{slug}/{id}/photos',[PhotoController::class,'store'])->name('photos.store');  
   
   
    Route::get('/{slug}/{id}/photos/{photo_id}/delete',[PhotoController::class,'destroy'])->name('photos.delete'); 
     Route::get('/{slug}/{id}/photos/{photo_id}/featured',[PhotoController::class,'featured'])->name('photos.featured'); 
});

});

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








// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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

//index - Show all data --> listings
//show - Show single dta --> listing
//create - Show form to create new --> listing
//store - Store Data --> New listing
//edit Show form to edit data
//update -- Update data
//destroy -- Delete data


//ALL Listing
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create',[ListingController::class, 'create']);

//Store Listing Data
Route::post('/listings',[ListingController::class, 'store']);

//Single Listing
Route::get('/listings/{listing}',  [ListingController::class, 'show']);


<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1')->group(function () {

Route::apiresource('brands','Api\BrandController');

Route::apiresource('subcategories','Api\SubcategoryController');

Route::apiresource('items','Api\ItemController');


Route::apiresource('orders','Api\OrderController');

Route::post('register','Api\AuthController@register')->name('register');

});


//search by subcategory_id and brand_id
Route::get('filter/{sid}/{bid}','Api\ItemController@filter')->name('filter');

//search by item_name or codeno
Route::get('search/{s}','Api\ItemController@search')->name('search');

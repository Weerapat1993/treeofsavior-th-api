<?php

use Illuminate\Http\Request;

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


Route::get('/classes', 'ClassController@index');

// SkillController 
Route::get('/skills', 'ApiSkillController@index');
Route::post('/skills/store', 'ApiSkillController@store');
Route::put('/skills/update', 'ApiSkillController@update');
Route::delete('/skills/delete', 'ApiSkillController@delete');

Route::get('/attributes', 'AttributeController@index');

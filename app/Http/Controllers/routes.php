<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');
Route::get('home', 'HomeController@index');
// Route::get('home', function() {
//     return Redirect::to('/');
// });

//Route::get('worldmap', 'HomeController@worldmap');
Route::get('download', 'HomeController@download');
Route::get('donate', 'HomeController@donate');
Route::get('thai-patch', 'HomeController@thai');
Route::get('class-build', 'HomeController@class_builder');
Route::get('all-attribute', 'AttributeController@all');
Route::get('help', 'HomeController@help');
Route::get('info', 'HomeController@info');

Route::get('profile', 'ProfileController@index');
Route::get('profile/create', 'ProfileController@create');
Route::post('profile/store', 'ProfileController@store');
Route::get('profile/edit', 'ProfileController@edit');
Route::post('profile/avatar', 'ProfileController@updateAvatar');
Route::post('profile/update', 'ProfileController@update');

Route::get('elements', 'ElementsController@index');
Route::get('news/show/5',function(){
	return Redirect::to('/info');
});

// Character =================================================================
Route::get('character','CharacterController@index');
Route::get('character/show/{id}','CharacterController@show');

// Quset Category =================================================================-
Route::get('category','ForumController@index');
Route::get('category/create','ForumController@create');
Route::post('category/store','ForumController@store');
Route::get('category/show/{id}','ForumController@show')->where('id', '[0-9]+');
Route::get('category/edit/{id}','ForumController@edit')->where('id', '[0-9]+');
Route::post('category/update/{id}','ForumController@update')->where('id', '[0-9]+');
Route::get('category/destroy/{id}','ForumController@destroy')->where('id', '[0-9]+');
Route::get('category/like/{id}','ForumController@like')->where('id', '[0-9]+');
Route::get('category/unlike/{id}','ForumController@unlike')->where('id', '[0-9]+');
Route::get('category/{name}','ForumController@category');

// News =================================================================
Route::get('news','NewsController@index');
Route::post('news/store','NewsController@store');
Route::get('news/create','NewsController@create');
Route::get('news/show/{id}','NewsController@show')->where('id', '[0-9]+');
Route::get('news/{id}/edit','NewsController@edit')->where('id', '[0-9]+');
Route::post('news/update/{id}','NewsController@update')->where('id', '[0-9]+');
Route::get('news/destroy/{id}','NewsController@destroy')->where('id', '[0-9]+');

// Skills =================================================================
Route::get('skill','SkillController@index');
Route::post('skill/store','SkillController@store');
Route::get('skill/create','SkillController@create');
Route::get('skill/show/{id}','SkillController@show')->where('id', '[0-9]+');
Route::get('skill/{id}/edit','SkillController@edit')->where('id', '[0-9]+');
Route::post('skill/update/{id}','SkillController@update')->where('id', '[0-9]+');

// Classes =================================================================
Route::get('class-tree','ClassesController@tree');
Route::get('classes','ClassesController@index');
Route::post('classes/store','ClassesController@store');
//Route::get('classes/create','ClassesController@create');
Route::get('classes/show/{id}','ClassesController@show')->where('id', '[0-9]+');
Route::get('classes/{id}/edit','ClassesController@edit')->where('id', '[0-9]+');
Route::post('classes/update/{id}','ClassesController@update')->where('id', '[0-9]+');

// Attributes =================================================================
Route::get('attribute','AttributeController@index');
Route::post('attribute/store','AttributeController@store');
Route::get('attribute/create','AttributeController@create');
Route::get('attribute/show/{id}','AttributeController@show')->where('id', '[0-9]+');
Route::get('attribute/{id}/edit','AttributeController@edit')->where('id', '[0-9]+');
Route::post('attribute/update/{id}','AttributeController@update')->where('id', '[0-9]+');
Route::get('attribute/destroy/{id}','AttributeController@destroy')->where('id', '[0-9]+');

// Class Attributes =================================================================
Route::get('class-attribute','ClassAttributeController@index');
Route::post('class-attribute/store','ClassAttributeController@store');
Route::get('class-attribute/create','ClassAttributeController@create');
Route::get('class-attribute/show/{id}','ClassAttributeController@show')->where('id', '[0-9]+');
Route::get('class-attribute/{id}/edit','ClassAttributeController@edit')->where('id', '[0-9]+');
Route::post('class-attribute/update/{id}','ClassAttributeController@update')->where('id', '[0-9]+');

// User =================================================================
Route::get('users','UserController@index');
Route::get('users/create','UserController@create');
Route::get('users/store','UserController@store');

// Key Generate =================================================================
Route::get('key','KeyController@index');
Route::post('key/store','KeyController@store');
Route::get('key/destroy/{id}','KeyController@destroy')->where('id', '[0-9]+');
Route::get('key/activate/{id}','KeyController@activate')->where('id', '[0-9]+');

// Maps =================================================================
Route::get('worldmap','MapController@index');
Route::get('map/create','MapController@create');
Route::post('map/store','MapController@store');
Route::get('map/show/{id}','MapController@show')->where('id', '[0-9]+');
Route::get('map/edit/{id}','MapController@edit')->where('id', '[0-9]+');
Route::post('map/update/{id}','MapController@update')->where('id', '[0-9]+');
Route::get('map/clear/{id}','MapController@clearmap')->where('id', '[0-9]+');

// Auth Controller
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


// Test Migrate
Route::get('artisan/migrate', 'ArtisanController@migrate');

Route::get('ajax-skill','AttributeController@ajax_skill');

//Route::get('/', 'HomeController@maintenance');

Route::get('ajax-skill','AttributeController@ajax_skill');

// ApiSkillController 
Route::get('/api/skills', 'ApiSkillController@index');
Route::post('/api/skills/store', 'ApiSkillController@store');
Route::post('/api/skills/update', 'ApiSkillController@update');
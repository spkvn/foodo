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

Route::get("recipe/{recipe}/ingredient/list", "RecipeController@listIngredients")->name("recipe.ingredient.list");
Route::post("recipe/{recipe}/ingredient/{ingredient}", "RecipeController@addIngredients")->name("recipe.ingredient.add");
Route::resource('recipe', 'RecipeController');

Route::get('ingredient/search', 'IngredientController@search')->name('ingredient.search');
Route::get('ingredient/{ingredient}/quantityCard', 'IngredientController@getQuantityCard')->name('ingredient.quantityCard');
Route::resource('ingredient', 'IngredientController');
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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('notification', 'notification\notificationController');

Route::resource('commentaires', 'commentaires');

Route::post('delete', 'commentaires@del');

Route::namespace('BonPlan')->prefix('plan')->name('plan.')->group(function(){
    Route::resource('bonplan', 'PlansControllers');
});
Route::namespace('projet')->prefix('projet')->name('projet.')->group(function(){
    Route::resource('details', 'ProjetControllers');
    Route::namespace('reponse')->prefix('commentaire')->name('commentaire.')->group(function(){
        Route::resource('reponse', 'reponse');
    });
});
Route::post('suivie', 'suivie_Controllers@create');
Route::resource('takalo', 'create_takalo_controller');


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

Route::get('/', function()
{
    return view('index');
});




// Route::get('voyages', function () {
//     return "Ceci est la page qui affichera tous les voyages";
// });

Route::get('voyage/{id_voyage}', function ($id_voyage) {
    dd($id_voyage);
        return view('show', ['id_voyage' => $id_voyage]);
})->where('id_voyage', '[0-9]+');

Route::get('a_propos', 'StaticPageController@numberRandom');



Route::group(['prefix' => 'admin'], function(){ 
    Route::resource('voyages', 'VoyageController');
    //Route::get('adminShowVoyage', 'VoyageController@show');
    
    Route::get('users', function () {
        return view('admin.users');
    });
}); 

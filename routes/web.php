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
|*/
      

Route::get('/1', function () {
    return view('welcome');
});

Route::get('ex', function () {
    return view('pages.exemple');
});
Route::get('/', function () {
    return view('layout.test');
});

Route::get('carte', function () {
    return view('layout.carte');
});

// Route::get('politique', function () {
//     return view('pages.politique');
// });

Route::get('economie', function () {
    return view('pages.economie');
});

Route::get('societe', function () {
    return view('pages.societe');
});

Route::get('cooperation', function () {
    return view('pages.cooperation');
});
Route::get('culture', function () {
    return view('pages.culture');
});

Route::get('contact', function () {
    return view('pages.contacte');
});

Route::get('international', function () {
    return view('pages.international');
});

/**************************************ROUTE _.._INTERNATIONAL_ACTUALITE_.._&NEWSLETTER******************************************** */


                Route::get('inter_politique','frontArticleController@index');
                Route::get('inter_economie','frontArticleController@index2');
                Route::get('inter_societe','frontArticleController@index3');
                Route::get('inter_cooperation','frontArticleController@index4');
                Route::get('inter_culture','frontArticleController@index5');
                Route::get('inter_autre','frontArticleController@index6');


                Route::get('/2','NewsletterController@create');
                Route::post('/2','NewsletterController@store');
              
                Route::get('mail','MailController@sendMailView' )->name('mail')  ;
                Route::post('send_mail','MailController@sendMail')->name('sendMail');
                
/********************************************************FTK************************************************************************** */
Auth::routes(['verify' => true]);
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// actualites
Route::get('/Admin', 'ActualiteController@index')->name('actu.nouveau');
Route::post('/Actualite', 'ActualiteController@store')->name('actu.store');
Route::post('/Categorie', 'CategorieController@store')->name('categorie');
Route::post('/Region', 'RegionController@store')->name('region');
Route::post('/auteur', 'AuteurController@store')->name('auteur');

//Affiche
Route::get('/Actaffiche', 'AfficheController@affiche')->name('affiche');
// Route::get('/actu/{categorie}/details/{id}', 'AfficheController@details')->name('details');

// Route::get('/liste', 'AfficheController@essai')->name('essayer');
// Route::get('/actu/{categorie}/details/{id}', 'AfficheController@details')->name('details');

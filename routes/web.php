<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\prodotticontroller;
use App\Http\Controllers\homecontroller;

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
Route::get('/', "App\Http\Controllers\homecontroller@home_view"); 


//CONTROLLER LOGIN 
Route::get('login', 'App\Http\Controllers\logincontroller@login_form'); 
Route::post('login', "App\Http\Controllers\logincontroller@checklogin");

Route::get('registrazione', 'App\Http\Controllers\logincontroller@registrazione_form');
Route::post('registrazione', "App\Http\Controllers\logincontroller@register");

Route::get('logout', "App\Http\Controllers\logincontroller@logout");


//CONTROLLER PRODOTTI 
Route::get('prodotti', "App\Http\Controllers\prodotticontroller@product"); 
Route::get('prodotti_upload', "App\Http\Controllers\prodotticontroller@product_upload"); 
Route::get('prodotti_cerca/{prodotto}', "App\Http\Controllers\prodotticontroller@cerca_prodotto");

Route::get('carrello',"App\Http\Controllers\prodotticontroller@carrello"); 
Route::get('carrello_upload', "App\Http\Controllers\prodotticontroller@upload_carrello"); 
Route::get('carrello_aggiungi/{prodotto}', "App\Http\Controllers\prodotticontroller@add_carrello"); 
Route::get('carrello_elimina/{prodotto}', "App\Http\Controllers\prodotticontroller@remove_carrello");

Route::get('home_prodotti', "App\Http\Controllers\prodotticontroller@home_upload"); 


//CONTROLLER HOME 
Route::get('home', "App\Http\Controllers\homecontroller@home_view"); 
Route::get('validazione/{email}', "App\Http\Controllers\homecontroller@validazione");
Route::get('spotify/{cantante}', "App\Http\Controllers\homecontroller@cerca_spotify"); 
Route::get('recensione_aggiungi/{recensione}', "App\Http\Controllers\homecontroller@recensione_add"); 
Route::get('recensione_visualizza', "App\Http\Controllers\homecontroller@recensione_view"); 
Route::get('contatti', "App\Http\Controllers\homecontroller@contatti_home"); 

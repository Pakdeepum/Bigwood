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


/** ---------------- Admin route ---------------- */

/** Index */
Route::get('/', 'UserController_index@index');

Route::get('/productandservice', 'UserController_product_type@index');

Route::get('/product/{id}', 'UserController_product@index');

Route::get('/contact', 'UserController_contact@index');

Route::get('/askmore', 'UserController_askmore@index');
Route::post('/massage_store', 'UserController_askmore@massage_store');

Route::get('/shipping', 'UserController_index@index');


/** ---------------- Admin route ---------------- */

/** Authen */
Route::get('/login', 'AdminController_auth@index');
Route::get('/register', 'AdminController_auth@index');

/** Product */
Route::get('/product_admin', 'AdminController_product@product_admin');
Route::post('/product_admin_store', 'AdminController_product@product_admin_store');
Route::post('/product_admin_edit/{id}', 'AdminController_product@product_admin_edit');
Route::get('/product_admin_destroy/{id}', 'AdminController_product@product_admin_destroy');

/** Product Type*/
Route::get('/product_type_admin', 'AdminController_product_type@product_type_admin');
Route::post('/product_type_admin_store', 'AdminController_product_type@product_type_admin_store');
Route::post('/product_type_admin_edit/{id}', 'AdminController_product_type@product_type_admin_edit');
Route::get('/product_type_admin_destroy/{id}', 'AdminController_product_type@product_type_admin_destroy');

/** Nav */
Route::get('/nav_admin', 'AdminController_nav@nav_admin');
Route::post('/nav_admin_edit_footer', 'AdminController_nav@nav_admin_edit_footer');
Route::post('/nav_admin_edit_slide/{id}', 'AdminController_nav@nav_admin_edit_slide');

/** Home */
Route::get('/home_admin', 'AdminController_home@home_admin');
Route::post('/home_admin_edit_aboutus/{id}', 'AdminController_home@home_admin_edit_aboutus');
Route::post('/home_admin_edit_homelink/{id}', 'AdminController_home@home_admin_edit_homelink');

/** Massage */
Route::get('/massage_admin', 'AdminController_massage@massage_admin');
Route::post('/massage_admin_view/{id}', 'AdminController_massage@massage_admin_view');
Route::post('/massage_admin_store', 'AdminController_massage@massage_admin_store');
Route::get('/massage_admin_destroy/{id}', 'AdminController_massage@massage_admin_destroy');

/** Quopic */
Route::get('/quopic_admin', 'AdminController_quopic@quopic_admin');
Route::post('/quopic_admin_edit/{id}', 'AdminController_quopic@quopic_admin_edit');

/** Contact */
Route::get('/contact_admin', 'AdminController_contact@contact_admin');
Route::post('/contact_admin_edit/{id}', 'AdminController_contact@contact_admin_edit');
Route::post('/contact_admin_edit_pic/{id}', 'AdminController_contact@contact_admin_edit_pic');

Auth::routes();

Route::get('/adminpage', 'AdminController_auth@admin')->name('adminpage');

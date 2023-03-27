<?php
use App\Http\Controllers\homeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('blog','homeController@getBlog')->name('getBlog');
Route::get('apply_as_techie','homeController@apply_as_techie')->name('apply_as_techie');



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_dashboard', 'Admin\DashboardController@index')->middleware('role:admin');
Route::get('/techie_dashboard', 'Techie\DashboardController@index')->middleware('role:techie');

<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

use App\ProductModel;
use App\TransactionsModel;

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



Route::get('/', 'MainController@index');
Route::get('/Add', 'MainController@create');
Route::any('/Login', 'MainController@LoginView');
Route::any('/Register', 'MainController@RegisterView');
Route::any('/History', 'MainController@HistoryView')->name('history')->middleware('auth');
Route::any('/User', 'UserController@index')->name('user')->middleware('auth');

Route::post('/AddProduct', 'MainController@store');
Route::get('/{product}/Edit', 'MainController@edit');
Route::delete('/Delete/{product}', 'MainController@destroy');
Route::patch('/Update/{products}', 'MainController@update');

Route::get('/register','AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register','AuthController@postRegister')->middleware('guest');
Route::get('/login','AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login','AuthController@postLogin')->middleware('guest');

Route::get('/home', function(){
    $products = ProductModel::all();
    return view('/Home/Home', ['product' => $products]);
})->name('home')->middleware('auth');

Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');

Route::get('/admin', 'TransactionsController@index')->name('admin')->middleware('auth');

Route::get('/product', function(){
    $products = ProductModel::all();
    return view('Admin/Admin-Tables', ['product' => $products]);
})->name('product')->middleware('auth');

Route::get('/product/{product}', 'MainController@show');
<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\ClienteController::class, 'index'])->name('home');
Route::get('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
//Auth::routes();
//Route::get('/', 'Auth\LoginController@showLoginFrom');

//Route::get('/home', 'App\Http\Controllers\ClienteControllerr@index')->name('home');
Route::get('/home', [App\Http\Controllers\ClienteController::class, 'dashboard'])->name('home');
//Route::get('/home','App\Http\Controllers\ProductoController@indexnavbars')->name('producto.indexnavbars');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	

	//Route::group(['middleware' => ['Administrator']],  function () {

			//Rutas Vista Cliente
			Route::get('cliente','App\Http\Controllers\ClienteController@index')->name('cliente.index');
			Route::post('cliente','App\Http\Controllers\ClienteController@store')->name('cliente.store');
			Route::put('cliente/{cliente}','App\Http\Controllers\ClienteController@update')->name('cliente.update');
			Route::get('cliente/{cliente}','App\Http\Controllers\ClienteController@edit')->name('cliente.edit');
			Route::put('cliente/{cliente}','App\Http\Controllers\ClienteController@update')->name('cliente.update');
			Route::delete('cliente/destroy/{cliente}','App\Http\Controllers\ClienteController@destroy')->name('cliente.destroy');

			//Ruta Vista roles
			Route::get('rol','App\Http\Controllers\RolController@index')->name('rol.index');
			Route::get('rol/selectRol','App\Http\Controllers\RolController@selectRol');

			//ruta register
			Route::get('empresar','App\Http\Controllers\EmpresaController@registro')->name('empresa.registro');
			
			// Rutas Vista Empresa
			Route::get('empresa','App\Http\Controllers\EmpresaController@index')->name('empresa.index');
			Route::post('empresa','App\Http\Controllers\EmpresaController@store')->name('empresa.store');
			Route::get('empresa/{empresa}','App\Http\Controllers\EmpresaController@edit')->name('empresa.edit');
			Route::put('empresa/{empresa}','App\Http\Controllers\EmpresaController@update')->name('empresa.update');
			Route::delete('empresa/destroy/{empresa}','App\Http\Controllers\EmpresaController@destroy')->name('empresa.destroy');
			// Rutas Producto
			Route::get('producto','App\Http\Controllers\ProductoController@index')->name('producto.index');
			Route::get('productonavbars','App\Http\Controllers\ProductoController@indexnavbars')->name('producto.indexnavbars');
			// Rutas Inventario
			Route::get('inventario','App\Http\Controllers\InventarioController@index')->name('inventario.index');
			// Rutas Formas de pago
			Route::get('pago','App\Http\Controllers\PagoController@index')->name('pago.index');
			Route::post('pago','App\Http\Controllers\PagoController@store')->name('pago.store');
			Route::get('pago/{pago}','App\Http\Controllers\pagoController@edit')->name('pago.edit');
			Route::put('pago/{pago}','App\Http\Controllers\PagoController@update')->name('pago.update');
			Route::delete('pago/destroy/{pago}','App\Http\Controllers\PagoController@destroy')->name('pago.destroy');
			//Rutas Vista Cotizacion
			Route::get('cotizacion','App\Http\Controllers\CotizacioneController@index')->name('cotizaciones.index');
			//Rutas Vista Facturacion
			Route::get('facturacion','App\Http\Controllers\FacturacionController@index')->name('facturaciones.index');

	//});
	
});

Auth::routes();



<?php

use Illuminate\Support\Facades\Route;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

// $role=Role::create(['name'=>'admin']);
// $role=Role::create(['name'=>'empresa']);
// $role=Role::create(['name'=>'cliente']);
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
   Route::resource('/ruta',App\Http\Controllers\Admin\RutaController::class);
   Route::resource('/empresa',App\Http\Controllers\Admin\EmpresaController::class);
   Route::resource('/post',App\Http\Controllers\Admin\PostController::class);
});

<?php

use App\Exports\ProductsExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

//Rubros
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/rubros', [App\Http\Controllers\RubroController::class, 'index'])->name('rubros');
Route::get('/rubros-crear', [App\Http\Controllers\RubroController::class, 'create'])->name('create_rubro');
Route::get('/rubros-guardar', [App\Http\Controllers\RubroController::class, 'store'])->name('store_rubro');
Route::get('/rubros-editar-{id}', [App\Http\Controllers\RubroController::class, 'edit'])->name('edit_rubro');
Route::get('/rubros-guardar-{id}', [App\Http\Controllers\RubroController::class, 'update'])->name('edit_save_rubro');
Route::get('/rubros-eliminar-{id}', [App\Http\Controllers\RubroController::class, 'destroy'])->name('delete_rubro');

//Productos
Route::get('/productos-listado', [App\Http\Controllers\ProductoController::class, 'index'])->name('list_productos');
Route::get('/productos-crear', [App\Http\Controllers\ProductoController::class, 'create'])->name('create');
Route::get('/producto-guardar', [App\Http\Controllers\ProductoController::class, 'store'])->name('store_producto');

Route::get('/excel', function () {
    return Excel::download(new ProductsExport, 'products.xlsx');
});
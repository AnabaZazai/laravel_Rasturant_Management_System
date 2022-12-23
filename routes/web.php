<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\MenueController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\WaiterController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactUsController;

use App\Http\Controllers\UserinterfaceController;

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


Route::get('/', function () {
    return view('welcome');
});

Route::get('ip', function () {
    return view('Layout.inner-page');
});

Route::get('hd', function () {
    return view('Layout.AdminSidebar');
});

Route::get('edm', function () {
    return view('Admin.MenueEdit');
});


Route::get('/ui',[UserinterfaceController::class, 'index'])->name('User_Interfce');
Route::post('/reservation',[ReservationController::class, 'store']);


Route::get('/catagory',[CatagoryController::class, 'index'])->name('catagory_index');
Route::post('/catagory',[CatagoryController::class, 'store']);
Route::get('/catagory/edit/{id}',[CatagoryController::class, 'edit']);
Route::put('/catagory/edit/{id}',[CatagoryController::class, 'update']);
Route::get('/catagory/delete/{id}',[CatagoryController::class, 'destroy']);


Route::get('/menue',[MenueController::class, 'index'])->name('menue-index');

Route::post('/menue',[MenueController::class, 'store']);
Route::get('/menue/edit/{id}',[MenueController::class, 'edit']);
Route::put('/menue/edit/{id}',[MenueController::class, 'update']);
Route::get('/menue/delete/{id}',[MenueController::class, 'destroy']);



Route::get('/table',[TableController::class, 'index'])->name('table_index');
Route::post('/table',[TableController::class, 'store']);
Route::get('/table/edit/{id}',[TableController::class, 'edit']);
Route::put('/table/edit/{id}',[TableController::class, 'update']);
Route::get('/table/delete/{id}',[TableController::class, 'destroy']);



Route::get('/waiter',[WaiterController::class, 'index'])->name('waiter_index');
Route::post('/waiter',[WaiterController::class, 'store']);
Route::get('/waiter/edit/{id}',[WaiterController::class, 'edit']);
Route::put('/waiter/edit/{id}',[WaiterController::class, 'update']);
Route::get('/waiter/delete/{id}',[WaiterController::class, 'destroy']);


Route::get('/sale',[SaleController::class, 'index'])->name('sale');
Route::post('/menuesale',[SaleController::class, 'menuesale']);

Route::get('/chef',[ChefController::class, 'index'])->name('chef_index');
Route::post('/chef',[ChefController::class, 'store']);
Route::get('/chef/edit/{id}',[ChefController::class, 'edit']);
Route::put('/chef/edit/{id}',[ChefController::class, 'update']);
Route::get('/chef/delete/{id}',[ChefController::class, 'destroy']);


Route::get('/reserve',[ReservationController::class, 'index'])->name('reserve');
Route::get('/reserve/delete/{id}',[ReservationController::class, 'destroy']);


Route::get('/pepole_contact',[ContactUsController::class, 'index'])->name('pepole_contact');
Route::post('/contact',[ContactUsController::class, 'store']);
Route::get('/contact/delete/{id}',[ContactUsController::class, 'destroy']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

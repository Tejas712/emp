<?php

use App\Http\Middleware\checking;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\CardController;
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
Route::get('/home', [CardController::class, 'show']);
Route::post('/update', [CardController::class, 'update']);
Route::get('/signup', [CompaniesController::class, 'show']);
Route::post('/store', [EmployeesController::class, 'store']);
Route::get('/store', [EmployeesController::class, 'store'])->middleware(checking::class);
Route::get('/edit/{emp_id}', [CardController::class, 'edit']);
Route::get('/delete/{id}', [CardController::class, 'delete']);
Route::get('/addcompany', function () {
    return view('addcompany');
});
Route::get('/showcompany', [CompaniesController::class, 'carddetails']);
Route::post('/comstore', [CompaniesController::class, 'store']);
Route::get('/comedit/{com_id}', [CompaniesController::class, 'edit']);
Route::get('/comdelete/{com_id}', [CompaniesController::class, 'delete']);
Route::post('/comupdate', [CompaniesController::class, 'update']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/admin', function () {
    return redirect('home');
})->middleware(['auth'])->name('admindashboard');

require __DIR__.'/auth.php';

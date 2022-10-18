<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminDocumentListController;
use App\Http\Controllers\AdminDocumentRequestController;
use App\Http\Controllers\AdminPDFController;
use App\Http\Controllers\AdminResidentsListController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminSmsController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ResidentDocumentRequestController;
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
    return view('welcome');
});



Route::get('/adashboard',[AdminDashboardController::class,'index'])->middleware('auth','verified')->name('dashboard');

Route::middleware(['auth','role:admin'])->group(function (){
Route::get('admin/users',[AdminUserController::class,'index'])->middleware('auth')->name('user.index');
Route::get('admin/users/{id}',[AdminUserController::class,'show'])->middleware('auth')->name('user.show');
Route::get('admin/users/edit/{id}',[AdminUserController::class,'edit'])->middleware('auth')->name('user.edit');
Route::put('admin/users/update/{id}',[AdminUserController::class,'update'])->middleware('auth')->name('user.update');
Route::delete('admin/users/delete/{id}',[AdminUserController::class,'destroy'])->middleware('auth')->name('user.destroy');
Route::post('admin/users/create',[AdminUserController::class,'store'])->middleware('auth')->name('user.store');

Route::get('admin/roles',[AdminRoleController::class,'index'])->middleware('auth')->name('role.index');
Route::post('admin/roles/create',[AdminRoleController::class,'store'])->middleware('auth')->name('role.store');
Route::get('admin/roles/edit/{id}',[AdminRoleController::class,'edit'])->middleware('auth')->name('role.edit');
Route::put('admin/roles/update/{id}',[AdminRoleController::class,'update'])->middleware('auth')->name('role.update');
Route::delete('admin/roles/delete/{id}',[AdminRoleController::class,'destroy'])->middleware('auth')->name('role.destroy');
Route::get('admin/roles/{id}',[AdminRoleController::class,'show'])->middleware('auth')->name('role.show');
Route::post('admin/users/{user}/roles',[AdminRoleController::class,'assignRole'])->middleware('auth')->name('role.assignRole');
Route::delete('admin/users/{user}/roles/{role}',[AdminRoleController::class,'removeRole'])->middleware('auth')->name('role.removeRole');

Route::get('admin/doclist',[AdminDocumentListController::class,'index'])->middleware('auth')->name('doclist.index');
Route::post('admin/doclist/create',[AdminDocumentListController::class,'store'])->middleware('auth')->name('doclist.store');
Route::get('admin/doclist/edit/{id}',[AdminDocumentListController::class,'edit'])->middleware('auth')->name('doclist.edit');
Route::put('admin/doclist/update/{id}',[AdminDocumentListController::class,'update'])->middleware('auth')->name('doclist.update');
Route::delete('admin/doclist/destroy/{id}',[AdminDocumentListController::class,'destroy'])->middleware('auth')->name('doclist.destroy');

Route::get('admin/docres',[AdminDocumentRequestController::class,'index'])->middleware('auth')->name('docres.index');
Route::post('admin/docres/create',[AdminDocumentRequestController::class,'store'])->middleware('auth')->name('docres.store');
Route::get('admin/docres/edit/{id}',[AdminDocumentRequestController::class,'edit'])->middleware('auth')->name('docres.edit');
Route::put('admin/docres/update/{id}',[AdminDocumentRequestController::class,'update'])->middleware('auth')->name('docres.update');
Route::delete('admin/docres/destroy/{id}',[AdminDocumentRequestController::class,'destroy'])->middleware('auth')->name('docres.destroy');
Route::get('admin/docres/pdf/{id}',[AdminPDFController::class,'show'])->middleware('auth')->name('pdf.show');
Route::get('admin/docres/pdf/generatePDF/{id}',[AdminPDFController::class,'generatePDF'])->middleware('auth')->name('pdf.generatePDF');

Route::get('admin/docres/filter/',[AdminDocumentRequestController::class,'show'])->name('docres.filter');
Route::get('admin/user/filter',[AdminUserController::class,'show'])->name('user.filter');

Route::get('admin/residents/filter',[AdminResidentsListController::class,'show'])->name('reslist.filter');
});

Route::middleware(['auth','role:resident'])->group(function (){
    Route::get('/resident/docres/status',[ResidentDocumentRequestController::class,'show'])->middleware('auth')->name('residentdocres.show');
    Route::get('resident/docres',[ResidentDocumentRequestController::class,'index'])->middleware('auth')->name('residentdocres.index');
    Route::post('resident/docres/create',[ResidentDocumentRequestController::class,'store'])->middleware('auth')->name('residentdocres.store');
    Route::get('resident/docres/pdf/{id}',[AdminPDFController::class,'show'])->middleware('auth')->name('residentpdf.show');
});

Route::get('send',[AdminSmsController::class,'sendnotification']);
Route::get('admin/residents/list',[AdminResidentsListController::class,'index'])->name('reslist.index');
Route::post('admin/residents/create',[AdminResidentsListController::class,'store'])->name('reslist.store');
Route::get('admin/residents/edit/{id}',[AdminResidentsListController::class,'edit'])->name('reslist.edit');
Route::put('admin/residents/update/{id}',[AdminResidentsListController::class,'update'])->name('reslist.update');
Route::delete('admin/residents/delete/{id}',[AdminResidentsListController::class,'destroy'])->name('reslist.destroy');


//templates



require __DIR__.'/auth.php';

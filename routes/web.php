<?php
// use Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\ContactController;
use App\Http\Controllers\Firebase\SellerController;


Route::get('contacts', [ContactController::class, 'index']);

Route::get('add-contact', [ContactController::class, 'create']);
Route::get('edit-contact/{id}', [ContactController::class, 'edit']);
Route::get('delete-contact/{id}', [ContactController::class, 'destroy']);

Route::post('update-contact/{id}', [ContactController::class, 'update']);
Route::post('add-contact', [ContactController::class, 'store']);

Route::get('sellers', [SellerController::class, 'index'])->name('sellers.index');
Route::get('add-seller', [SellerController::class, 'create'])->name('sellers.create');
Route::get('edit-seller/{id}', [SellerController::class, 'edit'])->name('sellers.edit');
Route::get('delete-seller/{id}', [SellerController::class, 'destroy'])->name('sellers.destroy');

Route::post('update-seller/{id}', [SellerController::class, 'update'])->name('sellers.update');
Route::post('add-seller', [SellerController::class, 'store'])->name('sellers.store');

Route::get('/', function () {
    return view('welcome');
});

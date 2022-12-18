<?php
// use Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\ContactController;

Route::get('contacts', [ContactController::class, 'index']);

Route::get('add-contact', [ContactController::class, 'create']);
Route::get('edit-contact/{id}', [ContactController::class, 'edit']);
Route::get('delete-contact/{id}', [ContactController::class, 'destroy']);

Route::post('update-contact/{id}', [ContactController::class, 'update']);
Route::post('add-contact', [ContactController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\VistorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/example',function(){
    return view('example.create');
});
Route::post('/example', [ExampleController::class,'store'])->name('example.store');
Route::get('/example/show',[ExampleController::class,'index'])->name('example.index');
// Route to show the edit form
Route::get('/example/edit/{id}', [ExampleController::class, 'edit'])->name('example.edit');
// Route to update the record
Route::put('/example/update/{id}', [ExampleController::class, 'update'])->name('example.update');
Route::delete('/example/{id}', [ExampleController::class, 'destroy'])->name('example.destroy');



// vistors
Route::get('/vistor/show',[VistorController::class,'index'])->name('vistor.index');
Route::get('/vistor',function(){
    return view('vistor.create');
});
Route::post('/vistor',[VistorController::class,'store'])->name('vistor.store');
Route::get('/vistor/edit/{id}',[VistorController::class,'edit'])->name('vistor.edit');
Route::put('/vistor/update/{id}', [VistorController::class, 'update'])->name('vistor.update');
Route::delete('vistor/{id}', [VistorController::class, 'destroy'])->name('vistor.destroy');
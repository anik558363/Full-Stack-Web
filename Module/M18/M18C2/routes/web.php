<?php

use App\Http\Controllers\PatchController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



Route::get('/',[TaskController::class,'index'])->name('tasks.index');
Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
Route::post('/tasks/store',[TaskController::class,'store'])->name('tasks.store');

Route::get('/tasks/{id}/edit',[TaskController::class,'edit'])->name('tasks.edit');
//Route::post('/tasks/{id}/update',[TaskController::class,'update'])->name('tasks.update');

Route::put('/tasks/{id}/update',[TaskController::class,'update'])->name('tasks.update');

Route::get('/tasks/{id}/edit/patch',[PatchController::class,'editPatch'])->name('tasks.editPatch');

Route::patch('/tasks/{id}/update/patch',[PatchController::class,'updatePatch'])->name('tasks.updatePatch');


Route::delete('/tasks/{id}/delete',[TaskController::class,'destroy'])->name('tasks.delete');


Route::get('/test',[TaskController::class,'test']);





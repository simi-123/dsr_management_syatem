<?php

// Apply middleware to all routes for developer
Route::middleware(['developer'])->group(function () {
    Route::get('/', function () {
        // return view('welcome');
        return view('auth.login');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    // Admin routes
    Route::get('developer', function () {
        return view('developer');
    })->name('developer');

//Routes for Task
Route::get('/TaskMaster',[TaskController::class,'index'])->name('TaskMaster');

Route::get('/TaskMaster/create',[TaskController::class,'create'])->name('task.create');

Route::post('/TaskMaster',[TaskController::class,'store'])->name('task.store');

Route::get('/TaskMaster/{id}/edit', [TaskController::class, 'edit'])->name('task.edit');

Route::put('/TaskMaster/{id}', [TaskController::class, 'update'])->name('task.update');

Route::delete('/TaskMaster/{id}', [TaskController::class, 'destroy'])->name('task.destroy');    

//Routes for Task Progress Master
Route::get('/TaskProgress',[ProgressController::class,'index'])->name('ProgressMaster');

Route::get('/TaskProgress/create',[ProgressController::class,'create'])->name('progress.create');

Route::post('/TaskProgress',[ProgressController::class,'store'])->name('progress.store');

Route::get('/TaskProgress/{id}/edit',[ProgressController::class,'edit'])->name('progress.edit');

Route::put('/TaskProgress/{id}',[ProgressController::class,'update'])->name('progress.update');

Route::delete('/ProgressMaster/{id}', [ProgressController::class, 'destroy'])->name('progress.destroy');

});
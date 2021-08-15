<?php

Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');

Auth::routes();

Route::get('/admin_panel', [App\Http\Controllers\Admin\AdminController::class, 'admin'])->name('admin');
Route::get('/admin_panel/{id}', [App\Http\Controllers\Admin\AdminController::class, 'admin_ch'])->name('admin_ch');
Route::post('/admin_panel', [App\Http\Controllers\Admin\AdminController::class, 'admin_add'])->name('admin_add');
Route::delete('/admin_panel/{id}', [App\Http\Controllers\Admin\AdminController::class, 'admin_delete'])->name('admin_delete');
Route::patch('/admin_panel/{id}', [App\Http\Controllers\Admin\AdminController::class, 'admin_up'])->name('admin_up');
<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('equipo/create',[EquipoController::class,'create']);
Route::post('equipo/store', [EquipoController::class,'store'])->name('equipo.store');
Route::get('equipo/listar',[EquipoController::class,'index'])->name('equipo.index');
Route::delete('equipo/{equipo}',[EquipoController::class,'destroy'])->name('equipo.destroy');
Route::get('equipo/{equipo}/editar',[EquipoController::class,'edit'])->name('equipo.edit');
Route::put('equipo/{equipo}',[EquipoController::class,'update'])->name('equipo.update');
Route::get('equipo/{id}',[EquipoController::class,'show'])->name('equipo.show');


Route::get('jugador/create',[JugadorController::class,'create']);
Route::post('jugador/store', [JugadorController::class,'store'])->name('jugador.store');
Route::get('jugador/listar',[JugadorController::class,'index'])->name('jugador.index');
Route::delete('jugador/{jugador}',[JugadorController::class,'destroy'])->name('jugador.destroy');
Route::get('jugador/{jugador}/editar',[JugadorController::class,'edit'])->name('jugador.edit');
Route::put('jugador/{jugador}',[JugadorController::class,'update'])->name('jugador.update');
Route::get('jugador/{id}',[JugadorController::class,'show'])->name('jugador.show');
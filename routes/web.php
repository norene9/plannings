<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\planningController;
use Illuminate\Http\Controllers\TeachersController;

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
    return view('home');
});

//afficher la liste des promo pour l'affichage des plan
Route::get('/cplanning', function () {
    return view('cplanning');
});
//afficher la liste des promo pour l'affichage des groupe
Route::get('/promotion', function () {
    return view('promotion');
});






//afficher les plan de chaque promo
Route::get('1cpip',[planningController::class,'planning1cpi']);
Route::get('2cpip',[planningController::class,'planning2cpi']);
Route::get('1csp',[planningController::class,'planning1cs']);
Route::get('2cssiwp',[planningController::class,'planning2cssiw']);
Route::get('2csisip',[planningController::class,'planning2csisi']);
Route::get('3cssiwp',[planningController::class,'planning3cssiw']);
Route::get('3csisip',[planningController::class,'planning3csisi']);
Route::post('ajouterseance',[planningController::class,'ajouterseance']);
Route::get('plan',[planningController::class,'plan']);

//aficher les modules
Route::get('module',[\App\Http\Controllers\ModuleController::class,'show']);
//ajouter et supprimer module
Route::post('ajoutermodule','\App\Http\Controllers\ModuleController@ajouter');
Route::get('deletemodule/{id}',[\App\Http\Controllers\ModuleController::class,'deletemodule']);
//ajouter prof
Route::post('ajouter','\App\Http\Controllers\TeachersController@ajouter');
//afficher les prof
Route::get('teacher',[\App\Http\Controllers\TeachersController::class,'show']);

//ajoute groupes
Route::post('ajouterg',[\App\Http\Controllers\groupeController::class,'ajouterg']);
//affichage des groupes pour chaque promo
Route::get('1cpig',[\App\Http\Controllers\groupeController::class,'groupe1cpi']);
Route::get('2cpig',[\App\Http\Controllers\groupeController::class,'groupe2cpi']);
Route::get('1csg',[\App\Http\Controllers\groupeController::class,'groupe1cs']);
Route::get('2cssiwg',[\App\Http\Controllers\groupeController::class,'groupe2cssiw']);
Route::get('2csisig',[\App\Http\Controllers\groupeController::class,'groupe2csisi']);
Route::get('3cssiwg',[\App\Http\Controllers\groupeController::class,'groupe3cssiw']);
Route::get('3csisig',[\App\Http\Controllers\groupeController::class,'groupe3csisi']);
//supprimer groupes
Route::get('deleteg/{id}',[\App\Http\Controllers\groupeController::class,'deleteg']);

// supprimer prof
Route::get('deletep/{id}',[\App\Http\Controllers\teachersController::class,'deletep']);
//update prof
Route::get('updatep/{id}',[\App\Http\Controllers\teachersController::class,'updateProf']);
//update groupe
Route::get('updateg/{id}',[\App\Http\Controllers\teachersController::class,'updateGroupe']);
//supprimer seance
Route::get('deletes/{id}',[\App\Http\Controllers\planningController::class,'deleteseance']);
//update seance
Route::get('updates/{id}',[\App\Http\Controllers\planningController::class,'updateSeance']);
//table examnen
//update module
Route::get('updatem/{id}',[\App\Http\Controllers\teachersController::class,'updateModule']);


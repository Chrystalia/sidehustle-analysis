<?php

use App\Http\Controllers\VisualizationController;
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
    return redirect('/side-hustle');
});
Route::get('/side-hustle', [VisualizationController::class, 'index']);
Route::post('/side-hustle/category', [VisualizationController::class, 'show']);

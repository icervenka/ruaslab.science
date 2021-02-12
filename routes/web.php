<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FundingController;
use App\Http\Controllers\ResultController;

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

Route::get('/', [IndexController::class, 'show']);

Route::get('/team', [TeamController::class, 'team']);

Route::get('/team/{surname}', [TeamController::class, 'person'])
  ->name('person');

Route::get('/projects', [ProjectController::class, 'projects']);

Route::get('/publications', [ProjectController::class, 'publications']);

Route::get('/projects/{project_details}', [ProjectController::class, 'project_details'])
  ->name('project');

Route::get('/funding', [FundingController::class, 'show'] );

Route::get('/results/{tag}', [ResultController::class, 'show'] );

Route::get('/contactus', function () {
    return view('contactus');
});

?>

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CompanyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('companies', CompanyController::class);

Route::group(['prefix' => 'import', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/contacts', [\App\Http\Controllers\Api\ContactController::class, 'index'])->name('contacts.index');
    Route::post('/import_parse', [\App\Http\Controllers\Api\ImportController::class, 'parseImport'])->name('import_parse');
    Route::post('/import_process', [\App\Http\Controllers\Api\ImportController::class, 'processImport'])->name('import_process');
});

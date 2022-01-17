<?php

use Illuminate\Support\Facades\Route;

use Arcanedev\LogViewer\Http\Controllers\LogViewerController;
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

if (!empty($_REQUEST['loc']) && $_REQUEST['loc']=='dashboard') {
    Route::get('/', [LogViewerController::class, 'index'])
    ->name('dashboard'); // log-viewer::dashboard
} elseif (!empty($_REQUEST['loc']) && $_REQUEST['loc']=='loglist') {
    Route::get('/', [LogViewerController::class, 'listLogs'])
    ->name('logs');
} elseif (!empty($_REQUEST['loc']) && $_REQUEST['loc']=='download') {
    Route::get('/', [LogViewerController::class, 'download'])
    ->name('dashboard'); // log-viewer::dashboard
} else {
    Route::get('/', [LogViewerController::class, 'index'])
    ->name('dashboard'); // log-viewer::dashboard
}

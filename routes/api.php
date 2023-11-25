<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['controller' => FileController::class], function () {
    // Route::post('/file', 'upload')->name('file.upload');
    Route::get('/download-pdf', 'downloadPdf')->name('file.download');
});

Route::group(['controller' => MailController::class], function () {
    Route::post('/send', 'send')->name('send.mail');
});

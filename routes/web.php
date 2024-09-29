<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::get('/log', [LogController::class, 'show'])->name('showlogs');
Route::get('/log/{id}', [LogController::class, 'showitem'])->name('showitem');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('sendcontact');

Route::redirect('/admin', '/login');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/blog', [BlogController::class, 'show'])->name('blog');
    Route::get('/blog/add', function () {
        return view('addblog');
    });
    Route::post('/blog/add', [BlogController::class, 'store']);
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
    Route::post('/blog/edit/{id}', [BlogController::class, 'update']);
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete']);
    Route::get('/blog/edit/{id}/delete/{imageid}', [BlogController::class, 'deleteImage']);

    Route::get('/offer', [OfferController::class, 'show'])->name('offer');
    Route::post('/offer', [OfferController::class, 'store'])->name('store_offer');

    Route::get('/contactform', [ContactController::class, 'showform'])->name('contactform');
    Route::post('/contactform', [ContactController::class, 'store'])->name('storecontactform');
});

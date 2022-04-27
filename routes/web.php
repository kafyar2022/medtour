<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MailController;
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
Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name( 'auth.logout');

Route::group(['middleware' => 'AuthMiddleware'], function () {
   // Authentication routes
   Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');
   // Localization route
   Route::get('/locale', [LocalizationController::class, 'setLang'])->name('localization');
   // Pages' routes
   Route::get('/', [PagesController::class, 'home'])->name('home');
   Route::get('/about', [PagesController::class, 'about'])->name('about');
   Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
   Route::get('/services', [PagesController::class, 'services'])->name('services');
   Route::get('/worksystem', [PagesController::class, 'worksystem'])->name('worksystem');
   Route::get('/countries', [PagesController::class, 'countries'])->name('countries');
   Route::get('/partners', [PagesController::class, 'partners'])->name('partners');
   Route::get('/reviews', [PagesController::class, 'reviews'])->name('reviews');
   Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
   // Mail routes
   Route::post('/mails/contact', [MailController::class, 'sendContact'])->name('mails.contact');
});
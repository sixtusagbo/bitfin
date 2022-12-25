<?php

use App\Http\Controllers\CoreController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [CoreController::class, 'index']);
Route::get('/about', [CoreController::class, 'about'])->name('about');
Route::get('/why_us', [CoreController::class, 'why_us'])->name('why_us');
Route::get('/forex_trading', [CoreController::class, 'forex_trading'])->name('forex_trading');
Route::get('/commitments', [CoreController::class, 'commitments'])->name('commitments');
Route::get('/stratagies', [CoreController::class, 'stratagies'])->name('stratagies');
Route::get('/affiliate', [CoreController::class, 'affiliate'])->name('affiliate');
Route::get('/faq', [CoreController::class, 'faq'])->name('faq');
Route::get('/contact', [CoreController::class, 'contact'])->name('contact');
Route::get('/security', [CoreController::class, 'security'])->name('security');
Route::get('/terms_and_conditions', [CoreController::class, 'terms'])->name('terms');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

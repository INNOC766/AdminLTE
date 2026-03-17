<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WidgetController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\UIController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TableController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login',    [LoginController::class,    'showLoginForm'])->name('login');
    Route::post('/login',   [LoginController::class,    'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register',[RegisterController::class, 'register']);
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

/*
|--------------------------------------------------------------------------
| Protected Admin Routes (require authentication)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    /*
    |------------------------------------------------------------------
    | Dashboard
    |------------------------------------------------------------------
    */
    Route::get('/',         [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard',[DashboardController::class, 'index']);
    Route::get('/dashboard/v2', [DashboardController::class, 'v2'])->name('dashboard.v2');
    Route::get('/dashboard/v3', [DashboardController::class, 'v3'])->name('dashboard.v3');

    /*
    |------------------------------------------------------------------
    | Widgets
    |------------------------------------------------------------------
    */
    Route::prefix('widgets')->name('widgets.')->group(function () {
        Route::get('/small-box', [WidgetController::class, 'smallBox'])->name('small-box');
        Route::get('/info-box',  [WidgetController::class, 'infoBox'])->name('info-box');
        Route::get('/cards',     [WidgetController::class, 'cards'])->name('cards');
    });

    /*
    |------------------------------------------------------------------
    | Layout Options
    |------------------------------------------------------------------
    */
    Route::prefix('layout')->name('layout.')->group(function () {
        Route::get('/unfixed-sidebar',   [LayoutController::class, 'unfixedSidebar'])->name('unfixed-sidebar');
        Route::get('/fixed-sidebar',     [LayoutController::class, 'fixedSidebar'])->name('fixed-sidebar');
        Route::get('/fixed-header',      [LayoutController::class, 'fixedHeader'])->name('fixed-header');
        Route::get('/fixed-footer',      [LayoutController::class, 'fixedFooter'])->name('fixed-footer');
        Route::get('/fixed-complete',    [LayoutController::class, 'fixedComplete'])->name('fixed-complete');
        Route::get('/sidebar-mini',      [LayoutController::class, 'sidebarMini'])->name('sidebar-mini');
        Route::get('/collapsed-sidebar', [LayoutController::class, 'collapsedSidebar'])->name('collapsed-sidebar');
        Route::get('/logo-switch',       [LayoutController::class, 'logoSwitch'])->name('logo-switch');
        Route::get('/rtl',               [LayoutController::class, 'rtl'])->name('rtl');
        Route::get('/custom-area',       [LayoutController::class, 'customArea'])->name('custom-area');
    });

    /*
    |------------------------------------------------------------------
    | UI Elements
    |------------------------------------------------------------------
    */
    Route::prefix('ui')->name('ui.')->group(function () {
        Route::get('/general',  [UIController::class, 'general'])->name('general');
        Route::get('/icons',    [UIController::class, 'icons'])->name('icons');
        Route::get('/timeline', [UIController::class, 'timeline'])->name('timeline');
    });

    /*
    |------------------------------------------------------------------
    | Forms
    |------------------------------------------------------------------
    */
    Route::prefix('forms')->name('forms.')->group(function () {
        Route::get('/general', [FormController::class, 'general'])->name('general');
    });

    /*
    |------------------------------------------------------------------
    | Tables
    |------------------------------------------------------------------
    */
    Route::prefix('tables')->name('tables.')->group(function () {
        Route::get('/simple', [TableController::class, 'simple'])->name('simple');
    });
});

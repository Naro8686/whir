<?php

use App\Http\Controllers\AffiliateController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';

Route::middleware(['ban_check'])->group(function () {
    Route::prefix('/affiliates')->name('affiliates.')->group(function () {
        Route::post('/', [AffiliateController::class, 'login'])->name('login');
        Route::post('/change-address/{session_id}', [AffiliateController::class, 'changeAddress'])->name('change-address');
        Route::post('/change-password/{session_id}', [AffiliateController::class, 'changePassword'])->name('change-password');
        Route::post('/change-min-payout/{session_id}', [AffiliateController::class, 'changeMinPayout'])->name('change-min-payout');
        Route::get('/{session_id}', [AffiliateController::class, 'cabinet'])
            ->where('session_id', '^[a-zA-Z0-9,-]{22,40}$')
            ->name('cabinet');
    });
    Route::prefix('/tx')->name('tx.')->group(function () {
        Route::post('/new-mix', [TransactionController::class, 'newMix'])->name('new-mix');
        Route::match(['GET', 'POST'], '/confirm-mix/{btc_addresses}/{delay}/{fee}', [TransactionController::class, 'confirmMix'])->name('confirm-mix');
        Route::get('/{tx_id}', [TransactionController::class, 'check'])->name('check');
    });

    Route::get('{slug}', PageController::class)->where('slug', '.*?');
});

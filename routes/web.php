<?php

use App\Http\Controllers\DetailController;
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
    return view('details.detail');
});

Route::resource('details', DetailController::class);

Route::post('/details/search', [DetailController::class,'search'])->name('details.search');

Route::post('/comparison/search', [DetailController::class,'searchComparison'])->name('detailsComparisonSearch');
Route::get('/comparison', [DetailController::class,'getComparison'])->name('detailsComparison');

Route::post('/esl/small/search', [DetailController::class,'getSmallEslSearch'])->name('smallEslSearch');

Route::get('/esl/small', [DetailController::class,'getSmallEsl'])->name('smallEsl');


Route::get('/esl/big', [DetailController::class,'getBigEsl'])->name('bigEsl');

Route::get('/homePage', [DetailController::class,'getHomePage'])->name('homePage');


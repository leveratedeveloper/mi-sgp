<?php

use Illuminate\Support\Facades\Route;
use Revolution\Google\Sheets\Facades\Sheets;
// use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/management-team', function () {
    return view('management-team');
})->name('management');

Route::get('/our-strategy', function () {
    return view('our-strategy');
})->name('strategy');

Route::get('/outlook', function () {
    return view('outlook');
})->name('outlook');

Route::get('/outlook/{slug}', function () {
    return view('outlook-detail');
})->name('outlook.detail');

Route::get('/solutions', function () {
    $values = Sheets::spreadsheet(env('GOOGLE_SHEET_ID'))
            ->sheet('Money Market MI Website')
            ->all();
    return view('solutions', compact('values'));
})->name('solutions');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\checkController;
use App\Http\Controllers\webSetting;
use App\Models\banner;
use App\Models\games;
use App\Models\links;
use App\Models\logos;
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


//Route::get('/', [checkController::class, 'check'] )->name('check');
Route::middleware(['checkip'])->group(function(){
    Auth::routes();
    Route::get('/add-games', [AdminController::class, 'index'])->name('add-games');
    Route::get('/list-games', [AdminController::class, 'listgames'])->name('list-games');
    Route::get('/list-games/edit/{id}', [AdminController::class, 'editlistgames'])->name('edit-listgames');
    Route::get('/tambah-game-baru', [AdminController::class, 'addgames'])->name('addgames');
    Route::get('/add-banner', [AdminController::class, 'banner'])->name('banner');
    Route::get('/tambah-logo-link', [AdminController::class, 'logolink'])->name('logolink');

        //   Web Setting
    Route::get('/web-setting',[webSetting::class, 'index'])->name('web-setting');

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
    Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});


//Route::middleware(['guest:auth', 'checkip'])->group(function(){
//
//          Route::get('/loginss', [AdminController::class, 'showlogin']);
////




Route::get('/', function () {
    $games = games::all();
    $banner = banner::all();
    $links = links::find(1);
    $logos = logos::find(1);
    return view('front',compact('games','banner', 'links', 'logos'));
});



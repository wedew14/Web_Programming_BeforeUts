<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\AuthorpageController;
use App\Http\Controllers\AuthorDetailPageController;
use App\Http\Controllers\ThreadlistController;
use App\Http\Controllers\DetailPageController;
use App\Http\Controllers\PopularController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/edufun',function(){
//     return view('homepage');
// })->name('homepage');

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('/thread',function(){
    return view('thread');
});

Route::get('/author', [AuthorpageController::class, 'index'])->name('authorpage');


Route::get('/aboutus',function(){
    return view('aboutus');
})->name('aboutuspage');

Route::get('/detail_author_page/{id}',[AuthorDetailPageController::class,'view']
)->name('detailauthor');

Route::get('/threadlist/{id}',[ThreadlistController::class,'view']
)->name('threadlist');

Route::get('/detailpage',[DetailPageController::class,'view'])->name('detailpage');

Route::get('/popular',[PopularController::class,'view'])->name('popularPage');
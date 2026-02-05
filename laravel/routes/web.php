<?php

use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('pages.past-paper');
});
Route::get('/topic/ch1-sets', function () {
    return view('pages.topic-detail');
})->name('topic.detail');



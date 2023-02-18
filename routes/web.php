<?php

use Illuminate\Support\Facades\Route;

// Route::get('url', 'Actions');
// Route::post('url', 'Actions');
// Route::put('url', 'Actions');
// Route::patch('url', 'Actions');
// Route::delete('url', 'Actions');
Route::get('user/{id?}', function ( $id ='') {
    return 'User '. $id;
});
Route::get('/', function () {
    return 'User';
})->name('hoamepage');

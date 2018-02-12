<?php

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', 'NotesController@index');

Route::get('/notes/{id}', 'NotesController@show');

Route::get('/contacto', function () {
    return 'welcome';
});

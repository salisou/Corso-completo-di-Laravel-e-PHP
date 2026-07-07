<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    redirect()->route('notes.index');
});


// Route::resource('notes', NoteController::class);
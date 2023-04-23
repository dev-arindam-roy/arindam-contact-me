<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('hi-arindam', function() {
    return view('hiarindam::index');
});

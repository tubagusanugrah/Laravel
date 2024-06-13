<?php

use Illuminate\Support\Facades\Route;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

Route::get('/', function () {
    return view('portofolio');
});

Route::get('about', function () {
    return view('about');
});

Route::get('skill', function () {
    return view('skill');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('project', function () {
    return view('project');
});

Route::get('portofolio', function () {
    return view('portofolio');
});
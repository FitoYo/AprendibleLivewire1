<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Articles;
use App\Http\Livewire\ArticleForm;



//Route::get('/', function () {return view('welcome');});

Route::get('/', Articles::class)->name('articles.index');

Route::get('/blog/crear', ArticleForm::class)->name('articles.create');
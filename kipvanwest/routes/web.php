<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Models\Categories;

Route::get('/', function () {
    $search = request('search'); // zoekterm uit de input

    $categories = Categories::with(['products' => function($query) use ($search) {
        if ($search) {
            $query->where('name', 'like', "%{$search}%");
        }
    }])->get();

    return view('index', compact('categories', 'search'));
});
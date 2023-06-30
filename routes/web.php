<?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Http\Request;


    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () {
        return view('content', [
            'heading' => 'Laravel and Vue Playground',
            'subheading' => 'This is a test environment for Laravel and Vue.js'
        ]);
    });

    Route::get('/test/{id}', function ($id) {
        @dd($id);
    });

    Route::get('/search', function (Request $request) {
        dd($request -> all());
    });

    Route::get('/posts', function () {
        return response()->json([
            'title' => 'My first post',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.'
        ]);
    });

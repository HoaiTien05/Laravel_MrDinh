<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\covidController;


Route::get('/index', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store']);

Route::get('/signup', [signupController::class, 'index']);
Route::post('/signup', [signupController::class, 'displayInfo']);

Route::get('/covid', [CovidController::class, 'getData']);

Route::get('/onlyRouter', function () {
    return 'Xin chao PNV';
});
Route::get('/', function () {
    return view('form');
});

Route::post('/calculate', function (Request $request) {
    $a = $request->input('a');
    $b = $request->input('b');

    $sum = $a + $b;

    return view('form', ['sum' => $sum]);
});

Route::group(['prefix' => 'tutorial'], function () {
    Route::get('/aws', function () {
        echo "aws tutorial";
    });

    Route::get('/jira', function () {
        echo "jira tutorial";
    });

    Route::get('/testng', function () {
        echo "testng tutorial";
    });
});


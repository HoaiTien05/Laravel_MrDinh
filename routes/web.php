<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\PostController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\covidController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShopeeController;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CreateTablesController;

Route::get('/createTables', [CreateTablesController::class, 'createAllTables']);

Route::get('/tableProducts', [ProductsController::class, 'createTable']);


Route::get('/productTable', function () {
    Schema::create('products', function (Blueprint $table) {
        $table->id(); 
        $table->string('name'); 
        $table->integer('price'); 
        $table->string('image'); 
        $table->timestamps(); 
    });

    return 'Bảng products đã được tạo với kiểu price là integer!';
});




Route::get('/index', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/store', [PostController::class, 'store']);

Route::get('/signup', [signupController::class, 'index']);
Route::post('/signup', [signupController::class, 'displayInfo']);

Route::get('/covid', [CovidController::class, 'getData']);

Route::resource('products', ProductController::class);

Route::get('/onlyRouter', function () {
    return 'Xin chao PNV';
});
// Route::get('/', function () {
//     return view('form');
// });

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

Route::get('/',function(){
    return view('welcome');
});

// Route::get('index', [
//     'as'=>'trang-chu',
//     'user'=>'PageController@getIndex',
// ]);

Route::get('/layout', [PageController::class, 'getIndex']);

Route::get('/shopee', [PageController::class, 'getIndex']);
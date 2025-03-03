<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class ProductsController extends Controller
{
    public function createTable()
    {
        Schema::create('productsController', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->integer('price'); 
            $table->string('image'); 
            $table->timestamps(); 
        });

        return "Bảng products đã được tạo thành công!";
    }
}


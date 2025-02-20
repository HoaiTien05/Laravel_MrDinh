<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $title = "Đây là tiêu đề";
        $description = "Đây là dòng mô tả";
        $coppyright = "Học web chuẩn";

        return view('test')->with([
            'title' => $title,
            'description' => $description,
            'coppyright' => $coppyright
        ]);
    }

    public function showForm()
    {
        return view('tong');
    }

    // Nhận dữ liệu từ form và tính tổng
    public function calculateSum(Request $request)
    {
     
        $sum = $request->a + $request->b;

        return view('tong', ['sum' => $sum]);
    }
}



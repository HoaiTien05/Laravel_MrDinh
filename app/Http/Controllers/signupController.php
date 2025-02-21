<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use Input, File;
use Request;
use App\Http\Requests\signupRequest;
use Illuminate\Support\Facades\Session;

class signupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('signup');
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function displayInfo (signupRequest $request)
{
    $user = [
        'name' => $request->input('name'),
        'age' => $request->input('age'),
        'date' => $request->input('date'),
        'phone' => $request->input('phone'),
        'web' => $request->input('web'),
        'address' => $request->input('address'),
    ];

    // Lưu thông tin vào session (dùng push để lưu vào mảng)
    session()->push('users', $user);

    // Lấy tất cả người dùng từ session
    $users = session('users', []);

    // Trả về view với thông tin người dùng
    return view('signup')->with('users', $users);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

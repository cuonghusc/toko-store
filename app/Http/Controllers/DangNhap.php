<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DangNhapRequest;

class DangNhap extends Controller
{
    public function create(){
        return view('login');
    }
    public function store(DangNhapRequest $request){
        $validated = $request->validated();
        // return redirect()->back();
    }
}

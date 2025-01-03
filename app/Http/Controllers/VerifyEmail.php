<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyEmail extends Controller
{
    public function verifyEmail(Request $request){
        return view("auth.verify-email");
    }
}

<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DahboardController extends Controller
{
    public function home(){
        return view('admins.dashboard');
    }
}

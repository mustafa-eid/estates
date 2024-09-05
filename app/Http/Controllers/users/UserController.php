<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function aboutUs()
    {
        $aboutUsData = DB::table('about_us')->first();
        return view('incloudes.aboutUs', compact('aboutUsData'));
    }

    public function OurProject()
    {
        $projects = DB::table('projects')->get();
        return view('incloudes.projects', compact('projects'));
    }

    public function OurServices()
    {
        $services = DB::table('services')->get();
        return view('incloudes.services', compact('services'));
    }

    public function contactUs()
    {
        $contacts = DB::table('contacts')->get();
        return view('incloudes.footer', compact('contacts'));
    }

    public function info()
    {
        $info = DB::table('info')->get();
        return view('incloudes.info', compact('info'));
    }

    public function index(){
        return view('home');
    }
}

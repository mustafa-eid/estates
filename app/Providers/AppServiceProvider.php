<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Fetch data from the database
        $aboutUsData = DB::table('about_us')->first();
        $projects = DB::table('projects')->get();
        $services = DB::table('services')->get();
        $contacts = DB::table('contacts')->get();
        $info = DB::table('info')->get(); // Added info data

        // Share data with all views
        view()->share('aboutUsData', $aboutUsData);
        view()->share('projects', $projects);
        view()->share('services', $services);
        view()->share('contacts', $contacts);
        view()->share('info', $info); // Added info data
    }

    public function register()
    {
        //
    }
}

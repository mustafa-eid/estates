<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Share $contacts, $aboutUsData, and $services with specific views
        View::composer(['index', 'incloudes.footer'], function ($view) {
            $contacts = DB::table('contacts')->get();
            $aboutUsData = DB::table('about_us')->first();
            $services = DB::table('services')->get();
            $info = DB::table('info')->get();

            $view->with('contacts', $contacts);
            $view->with('aboutUsData', $aboutUsData);
            $view->with('services', $services);
            $view->with('info', $info);
        });
    }

    public function register()
    {
        //
    }
}

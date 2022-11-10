<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\MyApp;

class DashboardController extends Controller
{
    //
    public function index()
    {
        // $project_img = Http::get(MyApp::API_URL.'get-project-image');
        // echo "<pre>";
        // print_r($project_img['project_prestigious_img']);
        // dd();
        // return view('content.dashboard.dashboards-analytics');   
        return view('dashboard');   
    }
    public function index2()
    {
        $country = Http::get(MyApp::API_URL.'country');
        print_r($country);
        // return view('content.dashboard.dashboards-analytics');   
        return view('dashboard2');   
    }
}

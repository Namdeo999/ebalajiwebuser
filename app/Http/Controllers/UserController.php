<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\MyApp;
use GuzzleHttp\Client;

class UserController extends Controller
{
    //
    public function index(Request $req)
    {
        // if($req->session()->has('USER_LOGIN'))
        // {
        //     return redirect('user/dashboard');
        // }else {
        //     return view('/login');
        // }
        return view('/login');
    }
    public function userLogin(Request $req)
    {
        $mobile = $req->input('mobile');
        $password = $req->input('password');

        $url = config('app.api_url').'user-login';
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->post($url, [
            'mobile' => $mobile,
            'password' => $password,
        ]);
        
        // $response = Http::post(MyApp::API_URL.'user-login', [
        //     'mobile' => $mobile,
        //     'password' => $password,
        // ]);

       
        // $response = Http::post('http://localhost:1700/api/user-login', [
        //     'mobile' => $mobile,
        //     'password' => $password,
        // ]);

        return $response;

        // return view('/login');
    }
}

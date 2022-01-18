<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Logout()
    {
        Auth::logout();
        return Redirect()->route('login');
    }

    // all_part_there

     public function allProduct()
    {
        return view('allProduct');
    }


    public function addProduct()
    {
        return view('addproduct');
    }




}

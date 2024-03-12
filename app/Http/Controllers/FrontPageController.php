<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('website.pages.home');
    }
    public function about()
    {
        return view('website.pages.aboutus');
    }
    public function service()
    {
        return view('website.pages.service');
    }
}

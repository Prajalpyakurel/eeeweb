<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class FrontPageController extends Controller
{
    public function index()
    {
        return view('website.pages.home');
    }
    public function about()
    {
        $employees = Employee::all();
        return view('website.pages.aboutus',compact('employees'));
    }
    public function service()
    {
        return view('website.pages.service');
    }
}

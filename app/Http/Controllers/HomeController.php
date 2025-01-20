<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function about()
    {
        return view('front.about');
    }
    public function experience()
    {
        return view('front.experience');
    }
    public function skills()
    {
        return view('front.skills');
    }
    public function projects()
    {
        return view('front.projects');
    }
    public function services()
    {
        return view('front.services');
    }
    public function courses()
    {
        return view('front.courses');
    }
    public function certificates()
    {
        return view('front.certificates');
    }
    public function contacts()
    {
        return view('front.contacts');
    }
    public function others()
    {
        return view('front.others');
    }
}

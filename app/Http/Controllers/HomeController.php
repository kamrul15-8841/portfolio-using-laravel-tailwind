<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('front.home', compact('sliders'));
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

<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Experience;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $experiences = Experience::all();
        return view('front.home', compact('sliders','abouts','experiences'));
    }
    public function about()
    {
        $abouts = About::all();
        return view('front.about', compact('abouts'));
    }
    public function experience()
    {
        $experiences = Experience::all();
        return view('front.experience', compact('experiences'));
    }
    public function skill()
    {
        return view('front.skills');
    }
    public function project()
    {
        return view('front.projects');
    }
    public function service()
    {
        return view('front.services');
    }
    public function course()
    {
        return view('front.courses');
    }
    public function certificate()
    {
        return view('front.certificates');
    }
    public function contact()
    {
        return view('front.contacts');
    }
    public function other()
    {
        return view('front.others');
    }
}

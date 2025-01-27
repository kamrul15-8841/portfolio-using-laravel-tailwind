<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $abouts = About::all();
        $experiences = Experience::all();
        $projects = Project::all();
        $services = Service::all();
        $courses = Course::all();
        return view('front.home', compact('sliders','abouts','experiences','projects','services','courses'));
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
        $projects = Project::all();
        return view('front.projects', compact('projects'));
    }
    public function service()
    {
        $services = Service::all();
        return view('front.services', compact('services'));
    }
    public function course()
    {
        $courses = Course::all();
        return view('front.courses', compact('courses'));
    }
    public function certificate()
    {
        return view('front.certificates');
    }
    public function contact()
    {
        return view('front.contacts');
    }
    public function addContact(Request $request)
    {
//        return $request->all();
        Contact::createOrUpdateContact($request);
        return redirect()->back()->with('success', 'Thanks for contact with me, We will reply you soon');
    }
    public function other()
    {
        return view('front.others');
    }
}

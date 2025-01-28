<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $sliders = Slider::all();
        $sliders = Slider::where('status', 'active')->get();
        $abouts = About::where('status', 'active')->get();
        $experiences = Experience::where('status', 'active')->get();
        $projects = Project::where('status', 'active')->get();
        $services = Service::where('status', 'active')->get();
        $courses = Course::where('status', 'active')->get();
        $skills = Skill::where('status', 'active')->get();
        return view('front.home',
            compact('sliders','abouts','experiences','projects','services','courses','skills'));
    }
    public function about()
    {
        $abouts = About::where('status', 'active')->get();
        return view('front.about', compact('abouts'));
    }
    public function experience()
    {
        $experiences = Experience::where('status', 'active')->get();
//            ->orderBy('name')
//            ->take(3)
//            ->get();
//        $experiences = Experience::all();
        return view('front.experience', compact('experiences'));
    }
    public function skill()
    {
        $skills = Skill::where('status', 'active')->get();
        return view('front.skills',compact('skills'));
    }
    public function project()
    {
        $projects = Project::where('status', 'active')->get();
        return view('front.projects', compact('projects'));
    }
    public function service()
    {
        $services = Service::where('status', 'active')->get();
        return view('front.services', compact('services'));
    }
    public function course()
    {
        $courses = Course::where('status', 'active')->get();
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

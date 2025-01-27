<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    public function index()
    {
//        $courses = Course::all();
        $courses = Course::paginate(3);
        return view('backend.course.index', compact('courses'));
    }

    public function create()
    {
        return view('backend.course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'institute' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'expertise' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
//            'slug' => 'required|unique:courses,slug',
        ]);
        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('abouts', 'public');
            $imagePath = $request->file('image') ? $request->file('image')->store('courses', 'public') : null;
        }
        $slug = Str::slug($request->title);
        Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'institute' => $request->institute,
            'period' => $request->period,
            'expertise' => $request->expertise,
            'image' => $imagePath ?? null,
            'status' => $request->status,
            'slug' => $slug,
        ]);
        return redirect()->route('courses.index')->with('success', 'course created successfully.');
    }

    public function edit(course $course)
    {
        return view('backend.course.edit', compact('course'));
    }

    public function update(Request $request, course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'institute' => 'required|string|max:255',
            'period' => 'required|string|max:255',
            'expertise' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
//            'slug' => 'required|unique:courses,slug,' . $course->id,
        ]);

        $imagePath = $course->image;
//        print_r($imagePath);
        if ($request->file('image')) {
//            Storage::disk('public')->delete($course->image);
            $imagePath = $request->file('image')->store('courses', 'public');
        }
        $slug = Str::slug($request->title);
        $course->update([
            'title' => $request->title,
            'description' => $request->description,
            'institute' => $request->institute,
            'period' => $request->period,
            'expertise' => $request->expertise,
            'image' => $imagePath ?? $course->image,
            'status' => $request->status,
            'slug' => $slug,
        ]);
        return redirect()->route('courses.index')->with('success', 'course updated successfully.');
    }

    public function destroy(course $course)
    {
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }

        $course->delete();
        return redirect()->route('courses.index')->with('success', 'course deleted successfully.');
    }
}

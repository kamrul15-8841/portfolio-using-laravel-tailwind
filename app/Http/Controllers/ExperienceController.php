<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::all();
        return view('backend.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('backend.experience.create');
    }

    public function store(Request $request)
    {
//        return $request->all();
//        exit();
       $request->validate([
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'company_name' => 'required|string|max:255',
            'company_address' => 'required|string|max:255',
            'joining_date' => 'required|date',
            'left_date' => 'nullable|date',
            'expertise' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
            'slug' => 'required|unique:experiences,slug',
        ]);
        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('abouts', 'public');
            $imagePath = $request->file('image') ? $request->file('image')->store('experiences', 'public') : null;
        }
        Experience::create([
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'joining_date' => $request->joining_date,
            'left_date' => $request->left_date,
            'expertise' => $request->expertise,
            'image' => $imagePath ?? null,
            'status' => $request->status,
            'slug' => $request->slug,
        ]);

        return redirect()->route('experiences.index')->with('success', 'experience created successfully.');
    }

    public function edit(Experience $experience)
    {
        return view('backend.experience.edit', compact('experience'));
    }

    public function update(Request $request, Experience $experience)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'job_description' => 'required|string',
            'company_name' => 'required|string|max:255',
            'company_address' => 'required|string|max:255',
            'joining_date' => 'required|date',
            'left_date' => 'nullable|date',
            'expertise' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
            'slug' => 'required|unique:experiences,slug,' . $experience->id,
        ]);

        $imagePath = $experience->image;
//        print_r($imagePath);
        if ($request->file('image')) {
            Storage::disk('public')->delete($experience->image);
            $imagePath = $request->file('image')->store('experiences', 'public');
        }

        $experience->update([
            'job_title' => $request->job_title,
            'job_description' => $request->job_description,
            'company_name' => $request->company_name,
            'company_address' => $request->company_address,
            'joining_date' => $request->joining_date,
            'left_date' => $request->left_date,
            'expertise' => $request->expertise,
            'image' => $imagePath ?? $experience->image,
            'status' => $request->status,
            'slug' => $request->slug,
        ]);

        return redirect()->route('experiences.index')->with('success', 'experience updated successfully.');
    }

    public function destroy(Experience $experience)
    {
        if ($experience->image) {
            Storage::disk('public')->delete($experience->image);
        }

        $experience->delete();

        return redirect()->route('experiences.index')->with('success', 'experience deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SkillController extends Controller
{
    public function index()
    {
//        $skill = Skill::all();
        $skills = Skill::paginate(3);
        return view('backend.skill.index', compact('skills'));
    }

    public function create()
    {
        return view('backend.skill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string',
            'description' => 'required|string|max:255',
            'progress' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
//            'slug' => 'required|unique:skill,slug',
        ]);
        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('abouts', 'public');
            $imagePath = $request->file('image') ? $request->file('image')->store('skill', 'public') : null;
        }
        $slug = Str::slug($request->title);
        Skill::create([
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'progress' => $request->progress,
            'image' => $imagePath ?? null,
            'status' => $request->status,
            'slug' => $slug,
        ]);
        return redirect()->route('skills.index')->with('success', 'Skill Created Successfully.');
    }

    public function edit(Skill $skill)
    {
        return view('backend.skill.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'title' => 'required|string',
            'description' => 'required|string|max:255',
            'progress' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
//            'slug' => 'required|unique:skill,slug,' . $skill->id,
        ]);

        $imagePath = $skill->image;
//        print_r($imagePath);
        if ($request->file('image')) {
//            Storage::disk('public')->delete($skill->image);
            $imagePath = $request->file('image')->store('skills', 'public');
        }
        $slug = Str::slug($request->title);
        $skill->update([
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'progress' => $request->progress,
            'image' => $imagePath ?? $skill->image,
            'status' => $request->status,
            'slug' => $slug,
        ]);
        return redirect()->route('skills.index')->with('success', 'Skill Updated Successfully.');
    }

    public function destroy(Skill $skill)
    {
        if ($skill->image) {
            Storage::disk('public')->delete($skill->image);
        }

        $skill->delete();
        return redirect()->route('skills.index')->with('success', 'Skill Deleted Successfully.');
    }
}

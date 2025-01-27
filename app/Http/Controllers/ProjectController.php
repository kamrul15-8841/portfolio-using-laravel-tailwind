<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
//        $projects = Project::all();
        $projects = Project::paginate(3);
        return view('backend.project.index', compact('projects'));
    }

    public function create()
    {
        return view('backend.project.create');
    }

    public function store(Request $request)
    {
//        return $request->all();
//        exit();
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'stack' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string|max:255',
            'github_link' => 'required|url|max:255',
            'web_link' => 'required|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
            'slug' => 'required|unique:projects,slug',
        ]);
        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('abouts', 'public');
            $imagePath = $request->file('image') ? $request->file('image')->store('projects', 'public') : null;
        }
        Project::create([
            'title' => $request->title,
            'type' => $request->type,
            'stack' => $request->stack,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'github_link' => $request->github_link,
            'web_link' => $request->web_link,
            'image' => $imagePath ?? null,
            'status' => $request->status,
            'slug' => $request->slug,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        return view('backend.project.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'stack' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string|max:255',
            'github_link' => 'required|url|max:255',
            'web_link' => 'required|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
            'slug' => 'required|unique:projects,slug,' . $project->id,
        ]);

        $imagePath = $project->image;
//        print_r($imagePath);
        if ($request->file('image')) {
//            Storage::disk('public')->delete($project->image);
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        $project->update([
            'title' => $request->title,
            'type' => $request->type,
            'stack' => $request->stack,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'github_link' => $request->github_link,
            'web_link' => $request->web_link,
            'image' => $imagePath ?? $project->image,
            'status' => $request->status,
            'slug' => $request->slug,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }
}

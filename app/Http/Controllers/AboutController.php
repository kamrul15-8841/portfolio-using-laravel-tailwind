<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index()
    {
//        $abouts = About::all();
        $abouts = About::paginate(6); // Load contacts
        return view('backend.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('backend.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
            'slug' => 'required|unique:abouts,slug',
        ]);
        if ($request->hasFile('image')) {
//            $data['image'] = $request->file('image')->store('abouts', 'public');
            $imagePath = $request->file('image')->store('abouts', 'public');
        }
//        $data['slug'] = Str::slug($request->slug);

//        About::create($data);
        About::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image' => $imagePath ?? null,
            'status' => $request->status,
            'slug' => $request->slug,
        ]);

        return redirect()->route('abouts.index')->with('success', 'About created successfully.');
    }

    public function edit(About $about)
    {
        return view('backend.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
            'slug' => 'required|unique:abouts,slug,' . $about->id,
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }
        $data['slug'] = Str::slug($request->slug);

        $about->update($data);


        return redirect()->route('abouts.index')->with('success', 'About updated successfully.');
    }

    public function destroy(About $about)
    {
        if ($about->image) {
            \Storage::delete('public/' . $about->image);
        }
        $about->delete();

        return redirect()->route('abouts.index')->with('success', 'About deleted successfully.');
    }
}

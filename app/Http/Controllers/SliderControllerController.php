<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Display a listing of the sliders
    public function index()
    {
        $sliders = Slider::paginate(10);
        return view('backend.slider.index', compact('sliders'));
    }

    // Show the form for creating a new slider
    public function create()
    {
        return view('backend.slider.create');
    }

    // Store a newly created slider in storage
    public function store(Request $request)
    {
        $request->validate([
            'caption' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048', // Validation for image file
            'status' => 'required|boolean',
            'slug' => 'required|string|unique:sliders,slug|max:255',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/sliders');
            $imagePath = $request->file('image')->store('sliders', 'public');

        }

        Slider::create([
            'caption' => $request->caption,
            'description' => $request->description,
            'image' => $imagePath ?? null,
            'status' => $request->status,
            'slug' => $request->slug,
        ]);

        return redirect()->route('sliders.index')->with('message', 'Slider added successfully.');
    }

    // Show the form for editing the specified slider
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit', compact('slider'));
    }

    // Update the specified slider in storage
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'caption' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|boolean',
            'slug' => 'required|string|unique:sliders,slug,' . $slider->id . '|max:255',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($slider->image) {
                Storage::delete($slider->image);
            }

//            $imagePath = $request->file('image')->store('public/sliders');
            $imagePath = $request->file('image')->store('sliders', 'public');
        }

        $slider->update([
            'caption' => $request->caption,
            'description' => $request->description,
            'image' => $imagePath ?? $slider->image,
            'status' => $request->status,
            'slug' => $request->slug,
        ]);

        return redirect()->route('sliders.index')->with('message', 'Slider updated successfully.');
    }

    // Remove the specified slider from storage
    public function destroy(Slider $slider)
    {
        if ($slider->image) {
            Storage::delete($slider->image);
        }

        $slider->delete();

        return redirect()->route('sliders.index')->with('message', 'Slider deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
//        $services = service::all();
        $services = Service::paginate(3);
        return view('backend.service.index', compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(Request $request)
    {
//        return $request->all();
//        exit();
        $request->validate([
            'type' => 'required|string',
            'stack' => 'required|string|max:255',
            'github' => 'required|url|max:255',
            'link' => 'required|url|max:255',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
//            'slug' => 'required|unique:services,slug',
        ]);
        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('abouts', 'public');
            $imagePath = $request->file('image') ? $request->file('image')->store('services', 'public') : null;
        }
        $slug = Str::slug($request->type);
        service::create([
            'type' => $request->type,
            'stack' => $request->stack,
            'github' => $request->github,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $imagePath ?? null,
            'status' => $request->status,
            'slug' => $slug,
        ]);

        return redirect()->route('services.index')->with('success', 'service created successfully.');
    }

    public function edit(service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, service $service)
    {
        $request->validate([
            'type' => 'required|string',
            'stack' => 'required|string|max:255',
            'github' => 'required|url|max:255',
            'link' => 'required|url|max:255',
            'description' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|boolean',
//            'slug' => 'required|unique:services,slug,' . $service->id,
        ]);

        $imagePath = $service->image;
//        print_r($imagePath);
        if ($request->file('image')) {
//            Storage::disk('public')->delete($service->image);
            $imagePath = $request->file('image')->store('services', 'public');
        }
        $slug = Str::slug($request->type);
        $service->update([
            'type' => $request->type,
            'stack' => $request->stack,
            'github' => $request->github,
            'link' => $request->link,
            'description' => $request->description,
            'image' => $imagePath ?? $service->image,
            'status' => $request->status,
            'slug' => $slug,
        ]);

        return redirect()->route('services.index')->with('success', 'service updated successfully.');
    }

    public function destroy(service $service)
    {
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'service deleted successfully.');
    }
}

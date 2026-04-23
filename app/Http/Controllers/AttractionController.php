<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attraction;
use App\Models\Zone;
use Illuminate\Support\Facades\Storage;

class AttractionController extends Controller
{
    public function index()
    {
        $attractions = Attraction::with('zone')->get(); // eager loading
        return view('admin.pages.attractions.index', compact('attractions'));
    }

    public function create()
    {
        $zones = Zone::all();
        return view('admin.pages.attractions.create', compact('zones'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'zone_id' => 'required|exists:zones,id',
            'price_range' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = basename($imagePath);
        }

        Attraction::create($validated);

        return redirect()->route('admin.attractions.index')
            ->with('success', 'Attraction created successfully.');
    }

    public function show($id)
    {
        $attraction = Attraction::with('zone')->findOrFail($id);
        return view('admin.pages.attractions.show', compact('attraction'));
    }

    public function edit($id)
    {
        $attraction = Attraction::findOrFail($id);
        $zones = Zone::all();

        return view('admin.pages.attractions.edit', compact('attraction', 'zones'));
    }

    public function update(Request $request, $id)
    {
        $attraction = Attraction::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'zone_id' => 'required|exists:zones,id',
            'price_range' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($attraction->image) {
                Storage::disk('public')->delete('images/' . $attraction->image);
            }

            $imagePath = $request->file('image')->store('images', 'public');
            $validated['image'] = basename($imagePath);
        }

        $attraction->update($validated);

        return redirect()->route('admin.attractions.index')
            ->with('success', 'Attraction updated successfully.');
    }

    public function destroy($id)
    {
        $attraction = Attraction::findOrFail($id);

        if ($attraction->image) {
            Storage::disk('public')->delete('images/' . $attraction->image);
        }

        $attraction->delete();

        return redirect()->route('admin.attractions.index')
            ->with('success', 'Attraction deleted successfully.');
    }
}
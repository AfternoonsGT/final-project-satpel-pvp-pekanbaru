<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use Illuminate\Support\Facades\Storage;

class ZoneController extends Controller
{
    public function index()
    {
        $zones = Zone::all();
        return view('admin.pages.zones.index', compact('zones'));
    }

    public function create()
    {
        return view('admin.pages.zones.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'price_range' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
          if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $validated['image'] = basename($imagePath);
            }
        
        Zone::create($validated);
        return redirect()->route('admin.zones.index')->with('success', 'Zone created successfully.');
    }


    public function show($id)
    {
        $zone = Zone::findorFail($id);
        return view('admin.pages.zones.show', compact('zone'));
    }

    public function edit($id)
    {
        $zone = Zone::findorFail($id);
        return view('admin.pages.zones.edit', compact('zone'));
    }

    public function update(Request $request, $id)
    {
       $validated = $request->validate([
           'name' => 'required',
            'description' => 'nullable',
            'price_range' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $zone = \App\Models\Zone::findorFail($id);
        if ($zone) {
            if ($zone->image && $request->hasFile('image')) {
                Storage::disk('public')->delete('images/' . $zone->image);
            }
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $validated['image'] = basename($imagePath);
            }

        }
        $zone->update($validated);
        return redirect()->route('admin.zones.index')->with('success', 'Zone updated successfully.');
        return redirect()->route('admin.zones.index')->with('error', 'Failed to update zone.');
    }
    
    public function destroy($id)
    {
        $zone =Zone::find($id);
        if ($zone) {
            $zone->delete();
            return redirect()->route('admin.zones.index')->with('success', 'Zone deleted succesfully.');
        } else {
            return redirect()->route('admin.zones.index')->with('error', 'Zone not found.');
        }
    }

   

}
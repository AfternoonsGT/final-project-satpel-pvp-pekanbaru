<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::with('reviewable')->get();
        return view('admin.pages.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.pages.reviews.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'reviewer_name' => 'required|string|max:255',
            'reviewable_id' => 'required|integer',
            'reviewable_type' => 'required|string',
            'rating'        => 'required|integer|min:1|max:5',
            'comment'       => 'required|string',
        ]);

        Review::create($validated);

        return redirect()->back()
            ->with('success', 'Review submitted successfully.');
    }

    public function show($id)
    {
        $review = Review::with('reviewable')->findOrFail($id);
        return view('admin.pages.reviews.show', compact('review'));
    }

    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.pages.reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $validated = $request->validate([
            'reviewer_name' => 'required|string|max:255',
            
            'rating'        => 'required|integer|min:1|max:5',
            'comment'       => 'required|string',
        ]);

        $review->update($validated);

        return redirect()->route('admin.reviews.index')
            ->with('success', 'Review updated successfully.');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('admin.reviews.index')
            ->with('success', 'Review deleted successfully.');
    }

    public function toggleApprove($id)
{
    $review = Review::findOrFail($id);

    $review->is_approved = !$review->is_approved;
    $review->save();

    return redirect()->back()->with('success', 'Review status updated successfully.');
}

    public function showReviews()
    {
        $reviews = Review::where('is_approved', true)->with('reviewable')->get();
        return view('landing.pages.reviews', compact('reviews'));
    }
}
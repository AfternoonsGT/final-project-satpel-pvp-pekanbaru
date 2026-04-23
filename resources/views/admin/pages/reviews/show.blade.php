@extends('admin.master')

@section('content')

<h1>Review Detail</h1>

<hr>

<p><strong>Reviewer Name:</strong> {{ $review->reviewer_name }}</p>

<p><strong>Attraction:</strong> {{ $review->reviewable->name ?? '-' }}</p>

<p><strong>Rating:</strong>
    @for ($i = 1; $i <= 5; $i++)
        @if ($i <= $review->rating)
            <span style="color:#f5c518; font-size:20px;">★</span>
        @else
            <span style="color:#ddd; font-size:20px;">★</span>
        @endif
    @endfor
</p>

<p><strong>Description:</strong></p>
<p>{{ $review->description ?? '-' }}</p>

<p><strong>Comment:</strong></p>
<p>{{ $review->comment }}</p>

<a href="{{ route('admin.reviews.index') }}"
   class="btn btn-secondary px-4 py-2 rounded-pill shadow-sm me-2">
    Back
</a>

@endsection
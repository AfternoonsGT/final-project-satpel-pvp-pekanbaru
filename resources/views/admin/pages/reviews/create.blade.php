@extends('admin.master')

@section('content')

<h1 class="mb-3 h2">Create New Review</h1>

<a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary mb-3">
    Back to Reviews
</a>

<hr>

<form action="{{ route('admin.reviews.store') }}" method="POST">
    @csrf

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Select Attraction (Polymorphic) --}}
    <div class="mb-3">
        <label for="reviewable_id" class="form-label">Select Attraction</label>

        <select class="form-select @error('reviewable_id') is-invalid @enderror"
                id="reviewable_id"
                name="reviewable_id"
                required>

            <option value="">-- Select Attraction --</option>

            @foreach (\App\Models\Attraction::all() as $attraction)
                <option value="{{ $attraction->id }}"
                    {{ old('reviewable_id') == $attraction->id ? 'selected' : '' }}>
                    {{ $attraction->name }}
                </option>
            @endforeach

        </select>

        @error('reviewable_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Reviewer Name --}}
    <div class="mb-3">
        <label for="reviewer_name" class="form-label">Reviewer Name</label>

        <input type="text"
               class="form-control @error('reviewer_name') is-invalid @enderror"
               id="reviewer_name"
               name="reviewer_name"
               value="{{ old('reviewer_name') }}"
               required>

        @error('reviewer_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Rating --}}
    <div class="mb-3">
        <label for="rating" class="form-label">Rating (1 - 5)</label>

        <input type="number"
               class="form-control @error('rating') is-invalid @enderror"
               id="rating"
               name="rating"
               min="1"
               max="5"
               value="{{ old('rating', 5) }}"
               oninput="updateStars(this.value)"
               required>

        @error('rating')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        {{-- Star Preview --}}
        <div id="starPreview" class="mt-2" style="font-size: 26px; color: #f5c518;"></div>
    </div>

    {{-- Description --}}
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>

        <textarea class="form-control @error('description') is-invalid @enderror"
                  id="description"
                  name="description"
                  rows="4">{{ old('description') }}</textarea>

        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Comment --}}
    <div class="mb-3">
        <label for="comment" class="form-label">Comment</label>

        <textarea class="form-control @error('comment') is-invalid @enderror"
                  id="comment"
                  name="comment"
                  rows="4"
                  required>{{ old('comment') }}</textarea>

        @error('comment')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Create Review
    </button>
</form>

{{-- Star Script --}}
<script>
    function updateStars(value) {
        value = parseInt(value);
        if (isNaN(value) || value < 1) value = 0;
        if (value > 5) value = 5;

        let stars = '';

        for (let i = 1; i <= 5; i++) {
            stars += (i <= value) ? '★' : '☆';
        }

        document.getElementById('starPreview').innerHTML = stars;
    }

    document.addEventListener('DOMContentLoaded', function () {
        updateStars(document.getElementById('rating').value);
    });
</script>

@endsection
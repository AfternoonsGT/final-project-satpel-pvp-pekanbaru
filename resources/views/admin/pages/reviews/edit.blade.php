@extends('admin.master')

@section('content')

<h1>Edit Review</h1>

<a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary mb-3">
    Back to Reviews
</a>

<hr>

<form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
    @csrf
    @method('PUT')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Reviewer Name --}}
    <div class="mb-3">
        <label class="form-label">Reviewer Name</label>
        <input type="text"
               name="reviewer_name"
               class="form-control @error('reviewer_name') is-invalid @enderror"
               value="{{ old('reviewer_name', $review->reviewer_name) }}"
               required>
        @error('reviewer_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Description --}}
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description"
                  rows="3"
                  class="form-control @error('description') is-invalid @enderror">{{ old('description', $review->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    {{-- Rating --}}
    <div class="mb-3">
        <label class="form-label">Rating (1 - 5)</label>

        <input type="number"
               name="rating"
               id="rating"
               min="1"
               max="5"
               class="form-control @error('rating') is-invalid @enderror"
               value="{{ old('rating', $review->rating) }}"
               oninput="updateStars(this.value)"
               required>

        @error('rating')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        {{-- Star Preview --}}
        <div id="starPreview" class="mt-2" style="font-size: 26px; color: #f5c518;">
            <!-- bintang muncul di sini -->
        </div>
    </div>

    {{-- Comment --}}
    <div class="mb-3">
        <label class="form-label">Comment</label>
        <textarea name="comment"
                  rows="4"
                  class="form-control @error('comment') is-invalid @enderror"
                  required>{{ old('comment', $review->comment) }}</textarea>
        @error('comment')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">
        Update Review
    </button>
</form>

{{-- Script Star Preview --}}
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
 @push('scripts')
                <script>
                    class AlertCustom {
                        constructor(message) {
                            this.message = message;
                        }

                        show() {
                            window.alert(this.message);
                        }
                    }

                    alertElement = document.querySelector('.alert');

                    if (alertElement) {
                        setTimeout(() => {
                            alertElement.style.transition = "opacity 1s ease-out";
                            alertElement.style.opacity = "0";

                            setTimeout(() => {
                                alertElement.remove();
                            }, 3000);

                        }, 1000);
                    }
                </script>
                
            @endpush

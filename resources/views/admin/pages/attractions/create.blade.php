@extends('admin.master')

@section('content')
<h1 class="mb-3 h2">Create New Attraction</h1>
<a href="{{ route('admin.attractions.index') }}" class="btn btn-secondary mb-3">Back to Attractions</a>
<hr>
<form action="{{ route('admin.attractions.store') }}" method="POST" enctype="multipart/form-data">
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
<div class="mb-3">
        <label for="zone_id" class="form-label">Select Zone</label>
        <select class="form-select" id="zone_id" name="zone_id" @error ('zone_id') is-invalid @enderror" required>
            <option value="">-- Select Zone --</option>
            @foreach ($zones as $zone)
                <option value="{{ $zone->id }}">{{ $zone->name }}</option>
            @endforeach
        </select>
        @error('zone_id')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Attraction Name</label>
        <input type="text" class="form-control" id="name" name="name" @error ('name') is-invalid @enderror" value="{{ old('name') }}" required>
        @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4"  @error ('description') is-invalid @enderror" value="{{ old('description') }}"></textarea>
        @error('description')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="price_range" class="form-label">Price Range</label>
        <input type="text" class="form-control" id="price_range" name="price_range" @error ('price_range') is-invalid @enderror" value="{{ old('price_range') }}" required>
        @error('price_range')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Zone Image</label>
        <input type="file" class="form-control" id="image" name="image" @error ('image') is-invalid @enderror" required>
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create Attraction</button>
</form>

@endsection
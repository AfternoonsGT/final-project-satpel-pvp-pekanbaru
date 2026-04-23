@extends('admin.master')

@section('content')
@extends('admin.master')

@section('content')
<h1 class="mb-3 h2">Edit Zone</h1>
<a href="{{ route('admin.zones.index') }}" class="btn btn-secondary mb-3">Back to Zones</a>
<hr>
<form action="{{ route('admin.zones.update', $zone->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

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
        <label for="name" class="form-label">Zone Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $zone->name }}"  @error ('name') is-invalid @enderror" value="{{ old('name') }}" required>
         @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="4"  @error ('name') is-invalid @enderror" value="{{ old('name') }}" required>{{ $zone->description }}</textarea>
         @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="price_range" class="form-label">Price Range</label>
        <input type="text" class="form-control" id="price_range" name="price_range" value="{{ $zone->price_range }}"  @error ('name') is-invalid @enderror" value="{{ old('name') }}" required>
         @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Zone Image</label>
        <input type="file" class="form-control" id="image" name="image"  @error ('name') is-invalid @enderror" value="{{ old('name') }}" required>
         @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>

        <br>
    <div class="mb-3">
        <label for="current_image" class="form-label">Current Image</label><br>
   <img src="{{ asset('storage/images/' . $zone->image) }}" alt="{{ $zone->name }}" width="150">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Update Zone</button>
</form>

@endsection
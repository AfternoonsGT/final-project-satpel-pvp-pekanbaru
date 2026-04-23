@extends('admin.master')
@section('content')
    <h1>Attraction Detail</h1>
    <p>Name: {{ $attraction->name }}</p>
    <p>Zone: {{ $attraction->zone->name }}</p>
    <p>Description: {{ $attraction->description }}</p>
    <p>Price Range: {{ $attraction->price_range }}</p>
    <p><img src="{{ asset('storage/images/' . $attraction->image) }}" alt="{{ $attraction->name }}" width="300"></p>
     <a href="{{ route('admin.attractions.index') }}" class="btn btn-secondary px-4 py-2 rounded-pill shadow-sm me-2">Back</a> 
@endsection
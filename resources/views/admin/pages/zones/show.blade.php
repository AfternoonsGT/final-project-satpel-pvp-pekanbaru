@extends('admin.master')

@section('content')
    <h1 class="mb-3 h2">Zone Detail</h1>
    <p>Name: {{ $zone->name }}</p>
    <p>Description: {{ $zone->description }}</p>
    <p>Price Range: {{ $zone->price_range }}</p>
    <p><img src="{{ asset('storage/images/' . $zone->image) }}" alt="{{ $zone->name }}" width="300"></p>
     <a href="{{ route('admin.zones.index') }}" class="btn btn-secondary px-4 py-2 rounded-pill shadow-sm me-2">Back</a>
@endsection
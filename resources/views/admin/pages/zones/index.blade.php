@extends('admin.master')

@section('content')

<H1>Zones</H1>

<a href="{{ route('admin.zones.create') }}" class="btn btn-primary mb-3">Create New Zone</a>
<hr>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price Range</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($zones as $zone)
        <tr>
            <td>{{ $zone->id }}</td>
            <td>{{ $zone->name }}</td>
            <td>{{ $zone->description }}</td>
            <td>{{ $zone->price_range }}</td>
            <td><img src="{{ asset('      
                <a href="{{ route('admin.zones.show', $zone->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('admin.zones.edit', $zone->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.zones.destroy', $zone->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @empty 
            <tr>
                <td colspan="6" class="text-center">No zones found.</td>
            </tr>
        @endforelse
    </tbody>
</table>    
@endsection
@extends('admin.master')

@section('content')

<H1>Zones</H1>

<a href="{{ route('admin.zones.create') }}" class="btn btn-primary mb-3">Create New Zone</a>
<hr>

 @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

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
            <td><img src="{{ asset('storage/images/' . $zone->image) }}" alt="{{ $zone->name }}" width="100"></td>
            <td>
                <a href="{{ route('admin.zones.show', $zone->id) }}" class="btn btn-info btn-sm">View</a>
                <a href="{{ route('admin.zones.edit', $zone->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.zones.destroy', $zone->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{ $zone->name }}?')">Delete</button>
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
        @extends('admin.master')

        @section('content')

        <H1>Attractions</H1>

        <a href="{{ route('admin.attractions.create') }}" class="btn btn-primary mb-3">Create New Attraction</a>
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
                    <th>Zone</th>
                    <th>Description</th>
                    <th>Price Range</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($attractions as $attraction)
                <tr>
                    <td>{{ $attraction->id }}</td>
                    <td>{{ $attraction->name }}</td>
                    <td>{{ $attraction->zone->name }}</td>
                    <td>{{ $attraction->description }}</td>
                    <td>{{ $attraction->price_range }}</td>
                    <td><img src="{{ asset('storage/images/' . $attraction->image) }}" alt="{{ $attraction->name }}" width="100"></td>
                    <td>
                        <a href="{{ route('admin.attractions.show', $attraction->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('admin.attractions.edit', $attraction->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.attractions.destroy', $attraction->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete {{ $attraction->name }}?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty 
                    <tr>
                        <td colspan="6" class="text-center">No attractions found.</td>
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

@extends('admin.master')

@section('content')

    <h1>Reviews</h1>

    <hr>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif  

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Reviewable Type</th>
                <th>Reviewable Name</th>
                <th>Reviewer</th>
                <th>Comment</th>
                <th>Rating</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($reviews as $review)
                <tr>

                    {{-- ID --}}
                    <td>{{ $review->id }}</td>
                    
                    {{-- Reviewable Type --}}
                    <td>
                        {{ class_basename($review->reviewable_type) }}
                    </td>

                    {{-- Reviewable Name --}}
                    <td>
                        {{ $review->reviewable->name ?? '-' }}
                    </td>

                    {{-- Reviewer --}}
                    <td>
                        {{ $review->reviewer_name }}
                    </td>

                    {{-- Comment --}}
                    <td>
                        {{ $review->comment }}
                    </td>

                    {{-- Rating --}}
                    <td>
                        @for ($i = 1; $i <= 5; $i++)
                            <span style="color: {{ $i <= $review->rating ? '#f5c518' : '#ddd' }};">
                                ★
                            </span>
                        @endfor
                    </td>

                    {{-- Status --}}
                    <td>
                        @if ($review->is_approved)
                            <span class="badge bg-success">Approved</span>
                        @else
                            <span class="badge bg-warning text-dark">Pending</span>
                        @endif
                    </td>

                    {{-- Action --}}
                    <td class="d-flex gap-1">

                        {{-- VIEW --}}


                        {{-- APPROVE / UNAPPROVE --}}
                        <form action="{{ route('admin.reviews.toggleApprove', $review->id) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <button type="submit"
                                class="btn btn-sm {{ $review->is_approved ? 'btn-secondary' : 'btn-success' }}">
                                {{ $review->is_approved ? 'Unapprove' : 'Approve' }}
                            </button>
                        </form>

                        {{-- DELETE --}}
                        <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST"
                            onsubmit="return confirm('Delete this review?')">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>

                    </td>

                </tr>

            @empty
                <tr>
                    <td colspan="8" class="text-center">No reviews found.</td>
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

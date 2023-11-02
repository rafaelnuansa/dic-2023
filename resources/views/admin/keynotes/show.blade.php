@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $keynote->name }}</h5>
                <p class="card-text"><strong>From:</strong> {{ $keynote->from }}</p>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted">Keynote Image</h6>
                @if ($keynote->image)
                    <img src="{{ asset('storage/' . $keynote->image) }}" alt="{{ $keynote->name }}"
                        style="max-width: 400px;">
                @else
                    No Image
                @endif
                <hr>
                <a href="{{ route('admin.keynotes.edit', $keynote->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('admin.keynotes.destroy', $keynote->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('Are you sure you want to delete this keynote?')">Delete</button>
                </form>
                <a href="{{ route('admin.keynotes.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
        </div>
    </div>
@endsection

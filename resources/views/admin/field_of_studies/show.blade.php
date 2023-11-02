@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $fieldOfStudy->name }}</h5>
                    <p class="card-text"><strong>ID:</strong> {{ $fieldOfStudy->id }}</p>
                    <hr>
                    <a href="{{ route('admin.field_of_studies.edit', $fieldOfStudy->id) }}"
                        class="btn btn-primary">Edit</a>
                    <form action="{{ route('admin.field_of_studies.destroy', $fieldOfStudy->id) }}" method="POST"
                        style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this field of study?')">Delete</button>
                    </form>
                    <a href="{{ route('admin.field_of_studies.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection

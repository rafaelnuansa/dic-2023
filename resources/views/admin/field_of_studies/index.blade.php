@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Field of Studies</h5>
                    <a href="{{ route('admin.field_of_studies.create') }}" class="btn btn-primary mb-3">Add New</a>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($fieldOfStudies as $fieldOfStudy)
                                <tr>
                                    <td>{{ $fieldOfStudy->id }}</td>
                                    <td>{{ $fieldOfStudy->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.field_of_studies.show', $fieldOfStudy->id) }}"
                                            class="btn btn-info">View</a>
                                        <a href="{{ route('admin.field_of_studies.edit', $fieldOfStudy->id) }}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.field_of_studies.destroy', $fieldOfStudy->id) }}"
                                            method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this field of study?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">No field of studies available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

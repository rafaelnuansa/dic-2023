@extends('layouts.admin', ['title' => 'Keynote Speakers'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-3">Keynote Speakers</h5>
                    <a href="{{ route('admin.keynotes.create') }}" class="btn btn-primary float-right">Create Keynote</a>
                </div>
                <div class="card-body">
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

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Keynote</th>
                                <th>From</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($keynotes as $keynote)
                                <tr>
                                    <td>
                                            <div class="d-flex gap-2 align-items-center">
                                                @if ($keynote->image)
                                                <div class="flex-shrink-0">
                                                <img src="{{ url($keynote->image) }}"
                                                    alt="{{ $keynote->name }}" class="avatar-xs rounded-circle">
                                                </div>
                                                @endif
                                                <div class="flex-grow-1">
                                                    {{ $keynote->name }}
                                                </div>
                                            </div>
                                    </td>
                                    <td>{{ $keynote->from }}</td>
                                    <td>
                                        <a href="{{ route('admin.keynotes.show', $keynote->id) }}"
                                            class="btn btn-sm btn-info">View</a>
                                        <a href="{{ route('admin.keynotes.edit', $keynote->id) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <form action="{{ route('admin.keynotes.destroy', $keynote->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"
                                                onclick="return confirm('Are you sure you want to delete this keynote?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No keynotes available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

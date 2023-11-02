@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $conference->name }}</h5>
                    <p class="card-text"><strong>Short Name:</strong> {{ $conference->shortname }}</p>
                    <p class="card-text"><strong>Description:</strong> {{ $conference->description }}</p>
                    <p class="card-text"><strong>Year:</strong> {{ $conference->year }}</p>
                    <p class="card-text"><strong>Month:</strong> {{ $conference->month }}</p>
                    <p class="card-text"><strong>Start Date:</strong> {{ $conference->start_date }}</p>
                    <p class="card-text"><strong>End Date:</strong> {{ $conference->end_date }}</p>
                    <p class="card-text"><strong>Location:</strong> {{ $conference->location }}</p>
                    <hr>
                    <h6 class="card-subtitle mb-2 text-muted">Assigned Keynotes</h6>
                    @if ($conference->keynotes->count() > 0)
                    <ul class="list-group">
                            @foreach ($conference->keynotes as $keynote)
                                <li class="list-group-item">
                                    {{ $keynote->name }}
                                    <form
                                        action="{{ route('admin.conferences.removeKeynote', ['conference' => $conference->id, 'keynote' => $keynote->id]) }}"
                                        method="POST" class="d-inline" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure you want to remove this keynote?')">Remove
                                            Keynote</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        No Keynotes Assigned
                    @endif
                    <hr>
                    <a href="{{ route('admin.conferences.edit', $conference->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.conferences.assign', $conference->id) }}" class="btn btn-success">Assign
                        Keynote</a>
                    <form action="{{ route('admin.conferences.destroy', $conference->id) }}" method="POST"
                        style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this conference?')">Delete</button>
                    </form>
                    <a href="{{ route('admin.conferences.index') }}" class="btn btn-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Conference</h2>
                </div>
                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.conferences.update', ['conference' => $conference->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $conference->name }}"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="theme">Theme</label>
                            <input type="text" name="theme" id="theme" class="form-control"
                                value="{{ $conference->theme }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="shortname">Short Name</label>
                            <input type="text" name="shortname" id="shortname" class="form-control"
                                value="{{ $conference->shortname }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control"
                                required>{{ $conference->description }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="year">Year</label>
                            <input type="text" name="year" id="year" class="form-control" value="{{ $conference->year }}"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="month">Month</label>
                            <input type="text" name="month" id="month" class="form-control"
                                value="{{ $conference->month }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control"
                                value="{{ $conference->start_date }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="end_date">End Date</label>
                            <input type="date" name="end_date" id="end_date" class="form-control"
                                value="{{ $conference->end_date }}" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="form-control"
                                value="{{ $conference->location }}" required>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="registration_link">Registration Link</label>
                            <input type="text" name="registration_link" id="registration_link" value="{{ $conference->registration_link }}" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <img src="{{ $conference->image }}" alt="Conference Image" height="100">
                        </div>


                        <div class="form-group mb-3">
                            <label for="field_of_study">Field of Study</label>
                            @foreach ($fieldOfStudies as $fieldOfStudy)
                                <div class="form-check">
                                    <input type="checkbox" name="field_of_study[]"
                                        id="field_of_study_{{ $fieldOfStudy->id }}" class="form-check-input"
                                        value="{{ $fieldOfStudy->id }}" {{ in_array($fieldOfStudy->id, $selectedFieldOfStudies) ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="field_of_study_{{ $fieldOfStudy->id }}">{{ $fieldOfStudy->name }}</label>
                                </div>
                            @endforeach
                        </div>

                        <button type="submit" class="btn btn-primary">Update Conference</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

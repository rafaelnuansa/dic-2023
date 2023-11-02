@extends('layouts.admin')

@section('content')
    <div class="row">
       <div class="card">
        <div class="card-body">
            
        <h5>Assign Keynote to {{ $conference->name }}</h5>
            <form action="{{ route('admin.conferences.storeAssign', $conference->id) }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="keynote">Select Keynote:</label>
                    <select name="keynote" id="keynote" class="form-control">
                        @foreach ($keynotes as $keynote)
                            <option value="{{ $keynote->id }}">{{ $keynote->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Assign Keynote</button>
            </form>
            
        <a href="{{ route('admin.conferences.show', $conference->id) }}" class="btn btn-secondary mt-4 mb-4">Back to Conference</a>
        </div>
       </div>
    </div>
@endsection

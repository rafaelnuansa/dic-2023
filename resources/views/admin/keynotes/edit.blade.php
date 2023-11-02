@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <form method="POST" action="{{ route('admin.keynotes.update', $keynote->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $keynote->name }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="from">From</label>
                        <input type="text" name="from" id="from" class="form-control" value="{{ $keynote->from }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    @if($keynote->image)
                    <div class="form-group mb-3">
                        <label>Current Image</label>
                        <br>
                        <img src="{{ asset('storage/' . $keynote->image) }}" alt="{{ $keynote->name }}" style="max-width: 200px;">
                    </div>
                    @endif
                    <button type="submit" class="btn btn-primary">Update Keynote</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin', ['title' => 'Data Conferences'])

@section('content')
    <div class="container-fluid">


        <div class="row g-4 mb-3">
            <div class="col-sm-auto">
                <div>
                    <a href="{{ route('admin.conferences.create') }}" class="btn btn-primary">Create Conference</a>
                </div>
            </div>
            <div class="col-sm">
                <div class="d-flex justify-content-sm-end gap-2">
                    <div class="search-box ms-2">
                        <input type="text" class="form-control" placeholder="Search...">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>
            </div>
        </div>

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


        <div class="row">
            @foreach ($conferences as $conference)
                <div class="col-xxl-3 col-sm-6 project-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="p-3 mt-n3 mx-n3 bg-secondary-subtle rounded-top">
                                <div class="d-flex gap-1 align-items-center justify-content-end my-n2">

                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="true">
                                            Manage
                                        </button>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.conferences.show', ['conference' => $conference->id]) }}"><i
                                                    class="fa fa-eye align-bottom me-2 text-muted"></i> View</a>
                                                    <a class="dropdown-item"
                                                href="{{ route('admin.conferences.assign', ['conference' => $conference->id]) }}"><i
                                                    class="fa fa-eye align-bottom me-2 text-muted"></i> Assign</a>
                                            <a class="dropdown-item"
                                                href="{{ route('admin.conferences.edit', ['conference' => $conference->id]) }}"><i
                                                    class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a>
                                            <div class="dropdown-divider"></div>

                                            <form
                                                action="{{ route('admin.conferences.destroy', ['conference' => $conference->id]) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn shadow-none border-0"
                                                    onclick="return confirm('Are you sure you want to delete this conference?')"><i
                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Remove</button>
                                            </form>

                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#removeProjectModal"><i
                                                    class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center pb-3">
                                    <img src="{{ $conference->image }}" height="100">
                                </div>
                            </div>

                            <div class="py-3">
                                <h5 class="fs-14 mb-3"><a href="#" class="text-body">{{ $conference->name }}</a></h5>
                                <div class="row gy-3">
                                    <div class="col-6">
                                        <div>
                                            <p class="text-muted mb-1">Start Date</p>
                                            <h5 class="fs-12">
                                                {{ \Carbon\Carbon::parse($conference->start_date)->format('d M Y') }}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <p class="text-muted mb-1">End Date</p>
                                            <h5 class="fs-12">
                                                {{ \Carbon\Carbon::parse($conference->end_date)->format('d M Y') }}
                                            </h5>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div>
                                            <p class="text-muted mb-1">Field Of Studies</p>
                                            <ul class="list-unstyled">
                                                @foreach ($conference->fieldOfStudies as $fieldOfStudy)
                                                    <li>{{ $fieldOfStudy->name }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>


                            </div>

                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
            @endforeach
        </div>
        <!-- end row -->

        <div class="row g-0 mb-4">

            <!-- end col -->
            <div class="col-sm-12">
                {{ $conferences->links() }}
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
@endsection

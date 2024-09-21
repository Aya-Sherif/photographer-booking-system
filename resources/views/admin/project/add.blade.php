@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Projects /</span> Add New Project</h4>
            <!-- Content -->
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- File input -->
                <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                        @include('admin.layouts.message')

                        <div>
                            <label for="title" class="form-label">Project Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                        </div>

                        <div>
                            <label for="Description" class="form-label">Project Description</label>
                            <textarea class="form-control" name="description" id="Description" rows="3">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Upload Photos</label>
                            <input class="form-control" type="file" name="images[]" id="images" multiple />
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

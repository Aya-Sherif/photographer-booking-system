@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Projects /</span> Edit Project</h4>
            <!-- Content -->
            <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- File input -->
                <div class="card">
                    <div class="card-body">
                        @include('admin.layouts.message')

                        <div>
                            <label for="title" class="form-label">Project Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                   aria-describedby="defaultFormControlHelp" value="{{ $project->title }}" />
                        </div>
                        <div class="mb-3">
                            <label for="Description" class="form-label">Project Description</label>
                            <textarea class="form-control" name="description" id="Description" rows="3">{{ $project->description }}</textarea>
                        </div>

                        <div class="mb-4">
                            @foreach ($project->photos as $photo)
                            <img src="{{ asset('front/img/project/' . $photo->image) }}" style="max-width: 300px; max-height: 300px;" class="img-fluid">


                            @endforeach
                        </div>
                            <div class="mb-3">
                                <label for="images" class="form-label"><strong> Add More Photos </strong></label>
                                <input class="form-control" type="file" name="images[]" id="images" multiple />
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                </div>
            </form>

        </div>
    </div>
@endsection

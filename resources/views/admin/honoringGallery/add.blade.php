@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About /</span> Add New Honor</h4>
            <!-- Content -->
            <form action="{{ route('honoringGallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- File input -->
                <div class="card">
                    <div class="card-body">
                        @include('admin.layouts.message')

                        <div>
                            <label for="defaultFormControlInput" class="form-label">Honor Name</label>
                            <input type="text" class="form-control" id="name" name="title"
                                aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Photo</label>
                            <input type="file" class="form-control" name="image" id="image" />
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

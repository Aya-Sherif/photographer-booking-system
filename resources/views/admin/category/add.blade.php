@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Category /</span> Add New Category</h4>
            <!-- Content -->
            <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- File input -->
                <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                        @include('admin.layouts.message')

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Category  Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                aria-describedby="defaultFormControlHelp" value="{{ old('name') }}" />
                        </div>




                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

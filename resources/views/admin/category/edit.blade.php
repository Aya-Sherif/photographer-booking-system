@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Categories /</span> Edit Category</h4>
            <!-- Content -->
            <form action="{{ route('categories.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <!-- File input -->
                <div class="card">
                    <div class="card-body">
                        @include('admin.layouts.message')

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                aria-describedby="defaultFormControlHelp" value="{{ $category->name}}" />
                        </div>



                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

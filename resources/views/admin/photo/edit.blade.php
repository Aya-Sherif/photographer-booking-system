@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Portfolio /</span> Edit Photo</h4>
            <!-- Content -->
            <form action="{{ route('photos.update',$photo->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <!-- File input -->
                <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                        @include('admin.layouts.message')

                        <div>
                            <label for="defaultFormControlInput" class="form-label">Photo Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                aria-describedby="defaultFormControlHelp" value="{{ $photo->name}}" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Category</label>
                            <select class="form-select" name="category_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if ($category->id == $photo->category_id) selected @endif>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                                <option value="0" @if ($photo->category_id == 0) selected @endif>None</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label" >Photo Style</label>
                            <select class="form-select" name="style" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                    <option value="large-width large-height">Large Width Large Height</option>
                                    <option value="large-width">Large Width</option>
                                    <option value="large-height">Large Height</option>
                                    <option value="natural">Natural</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">about /</span> Edit Award</h4>
            <!-- Content -->
            <form action="{{ route('awards.update',$award->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <!-- File input -->
                <div class="card">
                    <div class="card-body">
                        @include('admin.layouts.message')
                        <img src="{{ asset('front/img/about/awards/' . $award->image) }}" style="max-width: 300px; max-height: 300px;" class="img-fluid">

                        <div>
                            <label for="defaultFormControlInput" class="form-label">Award Name</label>
                            <input type="text" class="form-control" id="title" name="title"
                                aria-describedby="defaultFormControlHelp" value="{{ $award->title}}" />
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

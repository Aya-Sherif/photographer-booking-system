@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Personal Information /</span> Edit Your Informatio</h4>
            <!-- Content -->
            <form action="{{ route('personalinfo.update',$personalinfo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
@method('PUT')
                <!-- File input -->
                <div class="card">
                    <div class="card-body">
                        @include('admin.layouts.message')
                        <div class="mb-4">
                            <img src="{{ asset('front/img/about/' . $personalinfo->photo_path) }}" style="max-width: 300px; max-height: 300px;" class="img-fluid">


                        </div>
                        <div>
                            <label for="defaultFormControlInput" class="form-label">Headline</label>
                            <input type="text" class="form-control" id="headline" name="headline"
                                aria-describedby="defaultFormControlHelp" value="{{ $personalinfo->headline }}" />
                        </div>

                        <div>
                            <label for="body" class="form-label"> Body</label>
                            <textarea class="form-control" name="body" id="body" rows="3">{{ $personalinfo->body }}</textarea>
                        </div>



                        <div class="mb-3">
                            <label for="image" class="form-label">Cahnge  Your Photo</label>
                            <input type="file" class="form-control" name="photo_path" id="image" />
                        </div>

                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
@endsection

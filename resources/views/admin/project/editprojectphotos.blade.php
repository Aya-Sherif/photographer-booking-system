@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Projects /</span> Update Photos</h4>

            @if ($photos->count() != 0)
                @foreach ($photos as $photo)
                    <div class="mb-4 position-relative" style="display: inline-block; margin: 10px;">
                        <img src="{{ asset('front/img/project/' . $photo->image) }}" style="max-width: 500px; border-radius: 8px;" class="img-fluid">

                        <!-- Delete Photo Form with a unique ID for each form -->
                        <form id="delete-form-{{ $photo->id }}" action="{{ route('photo.destroy', $photo->id) }}" method="POST"
                              class="position-absolute top-50 start-50 translate-middle">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" style="opacity: 0.8;"
                                    onclick="confirmDelete({{ $photo->id }})">
                                <i class="bx bx-trash me-1"></i> Delete
                            </button>
                        </form>
                    </div>
                @endforeach
            @else
                <h3><strong>There are no photos in this project.</strong></h3>
                <a href="{{ route('projects.edit', $project->id) }}" class="alert-link">
                    <i class="bx bx-edit-alt me-1"></i> Go to add some photos
                </a>
            @endif
        </div>
    </div>

    <!-- JavaScript Confirmation Function -->
    <script>
        function confirmDelete(photoId) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + photoId).submit();  // Submit the form
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your photo has been deleted.",
                        icon: "success"
                    });
                }
            });
        }
    </script>
@endsection

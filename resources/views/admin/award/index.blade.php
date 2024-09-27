@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <hr class="my-5" />
    <div class="col-3 pb-3">
        <a href="{{ route('awards.create') }}"class="btn btn-primary float-left " tabindex="-1" role="button" >Add New Award</a>
    </div>
    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
        <h5 class="card-header">ِAwards Table </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                @include('admin.layouts.message')

                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($awards as $item)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->title }}</strong>
                            </td>
                            <td>
                                <img src="{{ asset('front/img/about/awards/') }}/{{ $item->image }}" style="max-width: 100px;">
                            </td>

                            {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete({{ $item->id }})">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                        <a class="dropdown-item" href="{{route('awards.edit', $item->id)}}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>

                                        <form id="delete-form-{{ $item->id }}" action="{{ route('awards.destroy', $item->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </div>

                                </div>
                            </td>
                        </tr>

                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
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
                    document.getElementById('delete-form-' + photoId).submit();
                    Swal.fire({
                        title: "Deleted!",
                        text: "Award has been deleted.",
                        icon: "success"
                    });
                }
            });
        }
    </script>

    <!-- Bootstrap Table with Header - Light--------------
                        -----------------------
                    ----------------------
                ----------------- -->
@endsection

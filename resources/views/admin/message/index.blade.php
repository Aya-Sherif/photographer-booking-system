@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <hr class="my-5" />

    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
        <h5 class="card-header">ِMessages</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                @include('admin.layouts.message')

                <thead class="table-light">
                    <tr>
                        <th>Client Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($messages as $item)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->name }}</strong>
                            </td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->email }}</strong>
                            </td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $item->phone_number }}</strong>
                            </td>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ \Illuminate\Support\Str::words($item->comments, 10, '...') }}</strong>
                            </td>

                            {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">

                                        <a class="dropdown-item" href="{{route('contacts.show', $item->id)}}">
                                            <i class=" me-1"></i> display
                                        </a>


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

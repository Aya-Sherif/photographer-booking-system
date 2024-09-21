@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <hr class="my-5" />

    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
        <h5 class="card-header">Categories Table </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                @include('admin.layouts.message')

                <thead class="table-light">
                    <tr>
                        <th>Category name</th>
                        <th>Number Of photos</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($categories as $category)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $category->name }}</strong>
                            </td>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $category->photos->count() }}</strong>

                            </td>

                            {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete({{ $category->id }})">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                        <a class="dropdown-item" href="{{route('categories.edit', $category->id)}}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>

                                        <form id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: none;">
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
        function confirmDelete(categoryId) {
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
                    document.getElementById('delete-form-' + categoryId).submit();
                    Swal.fire({
                        title: "Deleted!",
                        text: "Category has been deleted.",
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

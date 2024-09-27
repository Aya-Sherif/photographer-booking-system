@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <hr class="my-5" />

    <!-- Bootstrap Table with Header - Light -->
    <div class="col-3 pb-3">
        <a href="{{ route('projects.create') }}" class="btn btn-primary float-left " tabindex="-1" role="button" >Add New Project</a>
    </div>
    <div class="card">
        <h5 class="card-header">Projects Table </h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                @include('admin.layouts.message')

                <thead class="table-light">
                    <tr>
                        <th>Project Title </th>
                        <th>Images</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($projects as $project)
                        <tr>
                            <td>
                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                <strong>{{ $project->title }}</strong>
                            </td>
                            <td>
                                @foreach ($project->photos->take(3) as $photo)
                                <img src="{{ asset('front/img/project/' . $photo->image) }}" style="max-width: 90px;">
                            @endforeach

                            </td>
                            <td>
                                {{ Str::words($project->description, 7) }}
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="javascript:void(0);" onclick="confirmDelete({{ $project->id }})">
                                            <i class="bx bx-trash me-1"></i> Delete
                                        </a>
                                        <a class="dropdown-item" href="{{ route('projects.edit', $project->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Edit
                                        </a>
                                        {{-- <a class="dropdown-item" href="{{ route('photo.edit', $project->id) }}">
                                            <i class="bx bx-edit-alt me-1"></i> Delete pohoto
                                        </a> --}}

                                        <form id="delete-form-{{ $project->id }}" action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: none;">
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
        function confirmDelete(projectId) {
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
                    document.getElementById('delete-form-' + projectId).submit();
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your Project has been deleted.",
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

@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <hr class="my-5" />
    <!-- Bootstrap Table with Header - Light -->
    <div class="container-fluid mt-5">
        <div class="card shadow-sm" style="max-width: 60rem; margin: auto;">
            <h5 class="card-header bg-primary text-white">
                <span style="font-weight: bold;">Client Name:</span> {{ $message->name }}
                 <br>
                 <br>
                 <span style="font-weight: bold;">Phone:</span> {{ $message->phone_number }}
                 <br>
                 <br>
                 <span style="font-weight: bold;"> Email:</span> {{ $message->email }}
                </h5>
                <div class="card-body">
                <br>
                <h5 class="card-title" style="font-weight: bold;">Message:</h5>
                <p class="card-text">{{ $message->comments }}</p>
            </div>
        </div>
    </div>


    <!-- Bootstrap Table with Header - Light--------------
                                -----------------------
                            ----------------------
                        ----------------- -->
@endsection

@extends('admin.layouts.lay')
@section('content')
    <!-- Content wrapper -->
    <hr class="my-5" />
    <!-- Bootstrap Table with Header - Light -->
    <div class="card">
        <section class="about-section">
            <div class="container-fluid">
                @if ($personalInformation!=null)
{{--
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="about-pic set-bg" data-setbg="{{ asset('front\img\about\about-pic.jpg') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="about-text">
                            <div class="section-title">
                                <h2>{{$personalInformation->headline}}</h2>
                                <p>
                                    {{
                                        $personalInformation->body
                                    }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div> --}}


                <div class="card" style="width: 30rem;">
                    <img class="card-img-top" src="{{ asset('front/img/about/')}}/{{$personalInformation->photo_path}} " alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">                                {{$personalInformation->headline}}
                      </h5>
                      <p class="card-text"> {{
                        $personalInformation->body
                    }}</p>
                      <a href="{{ route('personalinfo.edit',$personalInformation->id)}}"class="btn btn-primary">Edit your Personal Info</a>
                    </div>
                  </div>
                @else
                <h3>    <strong>   There are no Personal Information.</strong></h3>
                <a href="{{ route('personalinfo.create')}}" class="alert-link">
                    <i class="bx bx-edit-alt me-1"></i> Go to add Some Information about Yourself
                </a>
            </div>                @endif
            </div>
        </section>
    </div>

    <!-- Bootstrap Table with Header - Light--------------
                        -----------------------
                    ----------------------
                ----------------- -->
@endsection

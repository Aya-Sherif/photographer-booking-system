@extends('layouts.lay')
@section('content')

    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Project</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            @foreach ($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Title above the photos -->
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $project->title }}</h5>
                    </div>

                    <!-- Slideshow of photos -->
                    <div id="carousel-{{ $project->id }}" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($project->photos as $key => $photo)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <img src="{{ asset('front/img/project/'.$photo->image) }}" class="d-block w-100" style="height: 400px; object-fit: cover;" alt="Project Image">
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-{{ $project->id }}" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-{{ $project->id }}" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!-- Hyperlink under the photo with custom styling -->
                    <div class="card-body text-center">
                        <a href="{{ route('project-details', $project->id) }}" style="color: #007bff; text-decoration: none;">View Project</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    @endsection


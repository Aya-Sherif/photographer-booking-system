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
                        <a href="./index.html">projects</a>
                        <span>{{$project->title}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio-section portfolio-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>{{$project->title}}</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="bd-top-text centered-text">
                        {{$project->description}}
                    </div>
                </div>
                <div class="col-lg-12">
                    @foreach ($project->photos as $item)
                        <div class="bd-pics centered-image">
                            <img src="{{ asset('front/img/project/'.$item->image) }}" alt="" class="img-fluid" style="max-height: 600px;    max-width: 100%;">
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->
@endsection

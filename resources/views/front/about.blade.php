@extends('layouts.lay')
@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    @if ($personalInformation == null)
        <section class="about-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="about-pic  set-bg" data-setbg="{{ asset('front/img/about/') }}">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="about-text">
                            <div class="section-title">
                                <h2>The Header</h2>
                                <p>About the photogrpher
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="about-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="about-pic  set-bg"
                            data-setbg="{{ asset('front/img/about/') }}/{{ $personalInformation->photo_path }}">
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="about-text">
                            <div class="section-title">
                                <h2>{{ $personalInformation->headline }}</h2>
                                <p>{{ $personalInformation->body }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- About Section End -->
    <!--  Awards Section -->
    <section class="portfolio-section  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Awards</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-4">
                <div class="portfolio-filter">
                    @foreach ($awards as $item)
                        <div
                        style="height: 200px;"
                        class="pf-item  set-bg-pic pf-mini-item" data-setbg="{{ asset('front/img/about/awards/') }}/{{ $item->image }}">
                            <a href="{{ asset('front/img/about/awards/') }}/{{ $item->image }}"
                                class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <span>

                                    {{ $item->title }}

                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--  Publication Section -->
    <section class="portfolio-section  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Publication</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-4">
                <div class="portfolio-filter">


                    @foreach ($publications as $item)
                        <div style="height: 200px;" class="pf-item  set-bg-pic pf-mini-item"
                            data-setbg="{{ asset('front/img/about/publication/') }}/{{ $item->image }}">
                            <a href="{{ asset('front/img/about/publication/') }}/{{ $item->image }}"
                                class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>{{ $item->title }}</h4>


                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!--  Clints Section -->
    <section class="portfolio-section  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Past Clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-4">
                <div class="portfolio-filter">


                    @foreach ($clients as $item)
                        <div class="pf-item  set-bg-pic pf-mini-item"
                            data-setbg="{{ asset('front/img/about/clients/') }}/{{ $item->image }}">
                            <a href="{{ asset('front/img/about/clients/') }}/{{ $item->image }}"
                                class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <span>

                                    {{ $item->name }}

                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--  Honoring Gallery Section -->
    <section class="portfolio-section  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Honoring Gallery
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 px-4">
                <div class="portfolio-filter">


                    @foreach ($honoringGalleries as $item)
                        <div class="pf-item  set-bg-pic pf-mini-item"
                            data-setbg="{{ asset('front/img/about/honoringGalleries/') }}/{{ $item->image }}">
                            <a href="{{ asset('front/img/about/honoringGalleries/') }}/{{ $item->image }}"
                                class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <span>

                                    {{ $item->title }}

                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Cta Section Begin -->
@endsection

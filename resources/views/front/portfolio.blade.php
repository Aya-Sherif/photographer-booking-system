
@extends('layouts.lay')
@section('content')
<style>
    .portfolio-filter {
	display: flex;
	flex-wrap: wrap;
	/* justify-content: space-between; */
  }

  .pf-item.large-width {
	width: 30%; /* Three items in one row */
	margin-bottom: 10px;
    margin-left: -1px;
  }

  .pf-item.large-width img {
	width: 100%;   /* Make the image take the full width of its container */
	height: auto;  /* Maintain the aspect ratio */
	object-fit: contain; /* Ensure the entire image is visible without cropping */
  }
</style>
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Portfolio</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Adjusted Padding for the Portfolio Section -->
    <section class="portfolio-section spad" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our latest works</h2>
                    </div>
                    <div class="filter-controls">
                        <ul id="category-filter">
                            <li class="active" data-filter="*">All</li>
                            @foreach ($categories as $category)
                            <li data-filter=".category-{{ $category->id }}">{{ $category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 p-4">
                    <div class="portfolio-filter">
                        @foreach ($portfolioItems as $item)
                        <div class="pf-item large-width set-bg
                            @if ($item->category_id != null)
                                category-{{ $item->category_id }}
                            @else
                                uncategorized
                            @endif"
                            data-setbg="{{ asset('front/img/portfolio/') }}/{{ $item->image }}" style="height: {{ $item->style }}px;">
                            <a href="{{ asset('front/img/portfolio/') }}/{{ $item->image }}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                            <div class="pf-text">
                                <h4>{{ $item->name }}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('#category-filter li').on('click', function() {
                var filterValue = $(this).attr('data-filter');

                if (filterValue === '*') {
                    $('.portfolio-filter .pf-item').show();
                } else {
                    $('.portfolio-filter .pf-item').hide();
                    $('.portfolio-filter .pf-item').filter(filterValue).show();
                }

                $('#category-filter li').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
    <!-- Portfolio Section End -->
@endsection

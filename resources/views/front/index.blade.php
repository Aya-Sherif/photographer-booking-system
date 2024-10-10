@extends('layouts.lay')
@section('content')


<!-- Services Section End -->

<!-- Categories Section Begin -->
<section class="categories-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title">

                </div>
            </div>
            <div class="col-lg-6 col-md-6">

            </div>
        </div>
        <div class="categories-slider owl-carousel">
            @foreach ($projects as $project)

            <div class="cs-item">
                <div class="cs-pic set-bg"
                     data-setbg="{{ asset('front') }}/img/project/{{ $project->photos->count() > 1 ? $project->photos[0]->image : 'default.jpg' }}" style="max-width: 100 px">
                </div>
                <div class="cs-text">
                    <h4>{{ $project->title }}</h4>
                    <span>{{ $project->photos->count() }} pictures</span>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- Categories Section End -->
<section class="portfolio-section spad">
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
                        data-setbg="{{ asset('front/img/portfolio/') }}/{{ $item->image }}" style="height: {{$item->style}}px">
                        <a href="{{ asset('front/img/portfolio/') }}/{{ $item->image }}" class="pf-icon image-popup"><span class="icon_plus"></span></a>
                        <div class="pf-text">
                                <h4>   {{ $item->name }}</h4>



                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="load-more-btn" >
        <a href="{{ route('portfolio') }}">Load More</a>
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


@endsection

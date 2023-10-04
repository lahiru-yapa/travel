@extends('Layout.app')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Destination</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Destination</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="dest-sort-bar">
                <div class="row gy-3 align-items-center justify-content-between">
                    <div class="col-sm-auto">
                        <p class="result">Showing 8 out of 24 destination</p>
                    </div>
                    <div class="col-sm-auto">
                        <form class="tour-ordering" method="get"><select name="orderby"
                                class="orderby form-select nice-select" aria-label="Tour order">
                                <option value="menu_order" disabled="disabled" selected="selected">Default Sorting
                                </option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select></form>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($tours as $tour)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-35">
                        <div class="trip-box">
                            <div class="trip-box__img"><img src="{{ asset($tour->destination_image) }}" alt="Trip image">
                            </div>
                            <div class="trip-box__content">
                                <h2 class="trip-box__title box-title"><i class="fas fa-location-dot"></i> <a
                                        href="{{ route('destinatioDetails', ['id' => $tour->id]) }}">{{ $tour->location }}</a>
                                </h2><span class="trip-box__count">{{ $tour->days }}Days</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="ot-pagination mt-3 text-center">
                <ul>
                    <li><a href="blog.html">1</a></li>
                    <li><a href="blog.html">2</a></li>
                    <li><a href="blog.html">3</a></li>
                    <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
@endsection

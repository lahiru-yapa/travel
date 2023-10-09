@extends('Layout.app')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Tour details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li>Tour details</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="ot-tour-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-lg-12">
                    <div class="tour-details">
                        <div class="row">
                            <div class="col-xxl-8 col-lg-6">

                                <div class="tour-header">
                                    <h2 class="tour-title">{{ $tour->title }}</h2>
                                    <div class="meta-box-wrap">
                                        <div class="meta-box">
                                            <div class="meta-box_icon"><i class="fal fa-circle-dollar"></i></div>
                                            <div class="media-body">

                                                <p class="meta-box_text">${{ $tour->price }}</p>
                                            </div>
                                        </div>
                                        <div class="meta-box">
                                            <div class="meta-box_icon"><i class="fal fa-clock"></i></div>
                                            <div class="media-body">
                                                <p class="meta-box_text">{{ $tour->days }} Days</p>
                                            </div>
                                        </div>
                                        <div class="meta-box">
                                            <div class="meta-box_icon"><i class="fal fa-location-dot"></i></div>
                                            <div class="media-body">

                                                <p class="meta-box_text">{{ $tour->location }}</p>
                                            </div>
                                        </div>
                                        <div class="meta-box">
                                            <div class="meta-box_icon"><i class="fal fa-users"></i></div>
                                            <div class="media-body">

                                                <p class="meta-box_text">{{ $tour->group_size }} + </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-img"><img src="{{ asset($tour->destination_image) }}" alt="Tour Image">
                                </div>
                                <ul class="nav tour-tab" id="tourTab" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link ot-btn active"
                                            id="description-tab" data-bs-toggle="tab" href="#tourDescription" role="tab"
                                            aria-controls="tourDescription" aria-selected="true">Information</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="plan-tab"
                                            data-bs-toggle="tab" href="#plan" role="tab" aria-controls="plan"
                                            aria-selected="false">Tour Plan</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="photos-tab"
                                            data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos"
                                            aria-selected="false">Tour Photos</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="location-tab"
                                            data-bs-toggle="tab" href="#location" role="tab" aria-controls="location"
                                            aria-selected="false">Location</a></li>


                                </ul>

                                <div class="tab-content" id="productTabContent">
                                    <div class="tab-pane fade show active" id="tourDescription" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="tour-description">
                                            <h3 class="inner-title">Description</h3>
                                            <p class="mt-n2 mb-4">{!! $tour->description !!}</p>

                                            <div class="description-table-wrap">
                                                {!! $tour->Included !!}
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $chapters = json_decode($tour->chapters, true);
                                        $index = 1;
                                    @endphp

                                    <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                                        <div class="tour-plan">
                                            <h3 class="inner-title">Tour Plan</h3>
                                            <div class="accordion" id="planAccordion">
                                                @foreach ($chapters as $content)
                                                    <div class="accordion-card">
                                                        <div class="accordion-header"
                                                            id="collapse-item-{{ $index }}">
                                                            <button class="accordion-button collapsed" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapse-{{ $index }}"
                                                                aria-expanded="false" aria-controls="collapse-1">Day
                                                                {{ $index }}
                                                            </button>
                                                        </div>
                                                        <div id="collapse-{{ $index }}"
                                                            class="accordion-collapse collapse"
                                                            aria-labelledby="collapse-item-{{ $index }}"
                                                            data-bs-parent="#planAccordion">
                                                            <div class="accordion-body">
                                                                {!! $content !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $index++; @endphp
                                                @endforeach


                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="photos" role="tabpanel"
                                        aria-labelledby="photos-tab">
                                        <div class="tour-photos">
                                            <div class="row g-4 masonary-active">
                                                @php
                                                    $destination_details_image = json_decode($tour->destination_details_image, true);
                                                    
                                                @endphp

                                                @foreach ($destination_details_image as $image)
                                                    <div class="col-md-6 filter-item">
                                                        <div class="tour-photo"><img src="{{ asset($image) }}"
                                                                alt="Image">
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="location" role="tabpanel"
                                        aria-labelledby="location-tab">
                                        <div class="tour-location"><iframe src="{{ $tour->location_map_link }}"
                                                allowfullscreen="" loading="lazy"></iframe></div>
                                    </div>
                                </div>
                                <div class="ot-comment-form">
                                    <div class="form-title">
                                        <h3 class="blog-inner-title">Leave A Reply</h3>
                                        <p class="text">Your email address will not be published. Required fields are
                                            marked
                                            *
                                        </p>
                                    </div>
                                    <form action="{{ route('create_review') }}" method="POST" class="widget-form">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group rating-select d-flex align-items-center"><label>Your
                                                    Rating</label>
                                                <p class="stars"><span><a class="star-1" href="#">1</a> <a
                                                            class="star-2" href="#">2</a> <a class="star-3"
                                                            href="#">3</a> <a class="star-4" href="#">4</a>
                                                        <a class="star-5" href="#">5</a></span></p>
                                            </div>

                                            <div class="col-12 form-group">
                                                <textarea placeholder="Write a Message" class="form-control" name="message"></textarea> <i class="text-title far fa-pencil-alt"></i>
                                            </div>
                                            <div class="col-md-6 form-group"><input type="text"
                                                    placeholder="Your Name" class="form-control" name="name"> <i
                                                    class="text-title far fa-user"></i>
                                            </div>
                                            <div class="col-md-6 form-group"><input type="text"
                                                    placeholder="Your Email" class="form-control" name="email"> <i
                                                    class="text-title far fa-envelope"></i></div>

                                            <div class="col-12 form-group mb-0"><button class="ot-btn"
                                                    type="submit">Post
                                                    Review</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6">

                                <aside class="sidebar-area">
                                    <div class="widget widget_book">
                                        <div class="widget-tour-book">
                                            <div class="top">
                                                <h4 class="title">Book This Tour</h4>
                                                <p class="price">${{ $tour->price }}per person</p>
                                            </div>
                                            <form action="{{ route('create_booking') }}" method="POST"
                                                class="widget-form">
                                                @csrf
                                                <div class="form-group"><input type="text" class="form-control"
                                                        name="name" id="name" value="{{ $tour->title }}"
                                                        readonly>
                                                </div>

                                                <div class="form-group"><input type="text" class="form-control"
                                                        name="name" id="name" placeholder="Your Name"> <i
                                                        class="fal fa-user"></i>
                                                    <div id="error_name" class="validation_error"></div>
                                                </div>
                                                <div class="form-group"><input type="email" class="form-control"
                                                        name="email" id="email" placeholder="Your Email"> <i
                                                        class="fal fa-envelope"></i>
                                                    <div id="error_email" class="validation_error"></div>
                                                </div>
                                                <div class="form-group">

                                                    <select id="country" name="country"
                                                        placeholder="Select Country"></select>
                                                </div>
                                                <div class="form-group"><input type="tel" class="form-control"
                                                        name="number" id="number" placeholder="Phone Number"> <i
                                                        class="fal fa-phone"></i>
                                                    <div id="error_number" class="validation_error"></div>
                                                </div>
                                                <div class="row">
                                                    <input type="hidden" name="tower_id" name="tower_id"
                                                        value="{{ $tour->id }}">
                                                    <div class="col-6 form-group"><input type="number" id="quantity"
                                                            min="1" max="100" placeholder="adults count"
                                                            name="adult">
                                                        <div id="error_adult" class="validation_error"></div>
                                                    </div>
                                                    <div class="col-6 form-group">
                                                        <input type="number" id="quantity" min="1"
                                                            max="100" placeholder="child count" name="child">
                                                        <div id="error_child" class="validation_error"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <input type="hidden" name="tower_id" name="tower_id"
                                                        value="{{ $tour->id }}">
                                                    <div class="col-6 form-group"><input type="text" id="datepicker"
                                                            placeholder="Select a date" class="form-control"
                                                            name="arrivedate"> <i class="fal fa-calendar-alt"></i>
                                                        <div id="error_arrivedate" class="validation_error"></div>
                                                    </div>
                                                    <div class="col-6 form-group">
                                                        <input type="text" id="datepicker1"
                                                            placeholder="Select a date" class="form-control"
                                                            name="enddate"> <i class="fal fa-calendar-alt"
                                                            style="text-align: center !important"></i>
                                                        <div id="error_enddate" class="validation_error">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                                        placeholder="Your Message"></textarea> <i class="fal fa-pencil"></i>
                                                    <div id="error_message" class="validation_error">
                                                    </div>
                                                    <div class="form-btn"><button class="ot-btn w-100">Book
                                                            now</button>
                                                    </div>
                                                </div>
                                                <p class="form-messages mb-0 mt-3"></p>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="widget">
                                        <h3 class="widget_title">Last Minute Deals</h3>
                                        <div class="recent-post-wrap">
                                            <div class="recent-post">
                                                <div class="media-img"><a href="blog-details.html"><img
                                                            src="assets/img/trip/recent-tour-1-1.jpg"
                                                            alt="Blog Image"></a></div>
                                                <div class="media-body">
                                                    <h4 class="post-title"><a class="text-inherit"
                                                            href="blog-details.html">Brooklyn
                                                            Christmas Lights</a></h4><span class="tour-price">From <span
                                                            class="price">250$</span></span>
                                                </div>
                                            </div>
                                            <div class="recent-post">
                                                <div class="media-img"><a href="blog-details.html"><img
                                                            src="assets/img/trip/recent-tour-1-2.jpg"
                                                            alt="Blog Image"></a></div>
                                                <div class="media-body">
                                                    <h4 class="post-title"><a class="text-inherit"
                                                            href="blog-details.html">Java &
                                                            Bali One Life Adventure</a></h4><span class="tour-price">From
                                                        <span class="price">250$</span></span>
                                                </div>
                                            </div>
                                            <div class="recent-post">
                                                <div class="media-img"><a href="blog-details.html"><img
                                                            src="assets/img/trip/recent-tour-1-3.jpg"
                                                            alt="Blog Image"></a></div>
                                                <div class="media-body">
                                                    <h4 class="post-title"><a class="text-inherit"
                                                            href="blog-details.html">Places
                                                            To Travel In November</a></h4><span class="tour-price">From
                                                        <span class="price">250$</span></span>
                                                </div>
                                            </div>
                                            <div class="recent-post">
                                                <div class="media-img"><a href="blog-details.html"><img
                                                            src="assets/img/trip/recent-tour-1-3.jpg"
                                                            alt="Blog Image"></a></div>
                                                <div class="media-body">
                                                    <h4 class="post-title"><a class="text-inherit"
                                                            href="blog-details.html">Pak Nam
                                                            Chumphon Town Tour</a></h4><span class="tour-price">From <span
                                                            class="price">250$</span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>

                            </div>
                        </div>
                        <ul class="nav tour-tab" id="tourTab" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn active"
                                    id="description-tab" data-bs-toggle="tab" href="#tourDescription" role="tab"
                                    aria-controls="tourDescription" aria-selected="true">Information</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="plan-tab"
                                    data-bs-toggle="tab" href="#plan" role="tab" aria-controls="plan"
                                    aria-selected="false">Tour Plan</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="photos-tab"
                                    data-bs-toggle="tab" href="#photos" role="tab" aria-controls="photos"
                                    aria-selected="false">Tour Photos</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link ot-btn" id="location-tab"
                                    data-bs-toggle="tab" href="#location" role="tab" aria-controls="location"
                                    aria-selected="false">Location</a></li>


                        </ul>

                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane fade show active" id="tourDescription" role="tabpanel"
                                aria-labelledby="description-tab">
                                <div class="tour-description">
                                    <h3 class="inner-title">Description</h3>
                                    <p class="mt-n2 mb-4">{!! $tour->description !!}</p>

                                    <div class="description-table-wrap">
                                        {!! $tour->Included !!}
                                    </div>
                                </div>
                            </div>
                            @php
                                $chapters = json_decode($tour->chapters, true);
                                $index = 1;
                            @endphp

                            <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                                <div class="tour-plan">
                                    <h3 class="inner-title">Tour Plan</h3>
                                    <div class="accordion" id="planAccordion">
                                        @foreach ($chapters as $content)
                                            <div class="accordion-card">
                                                <div class="accordion-header" id="collapse-item-{{ $index }}">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-{{ $index }}"
                                                        aria-expanded="false" aria-controls="collapse-1">Day
                                                        {{ $index }}
                                                    </button>
                                                </div>
                                                <div id="collapse-{{ $index }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="collapse-item-{{ $index }}"
                                                    data-bs-parent="#planAccordion">
                                                    <div class="accordion-body">
                                                        {!! $content !!}
                                                    </div>
                                                </div>
                                            </div>
                                            @php $index++; @endphp
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                                <div class="tour-photos">
                                    <div class="row g-4 masonary-active">
                                        @php
                                            $destination_details_image = json_decode($tour->destination_details_image, true);
                                            
                                        @endphp

                                        @foreach ($destination_details_image as $image)
                                            <div class="col-md-6 filter-item">
                                                <div class="tour-photo"><img src="{{ asset($image) }}" alt="Image">
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                                <div class="tour-location"><iframe src="{{ $tour->location_map_link }}"
                                        allowfullscreen="" loading="lazy"></iframe></div>
                            </div>
                        </div>
                        <div class="ot-comment-form">
                            <div class="form-title">
                                <h3 class="blog-inner-title">Leave A Reply</h3>
                                <p class="text">Your email address will not be published. Required fields are marked
                                    *
                                </p>
                            </div>
                            <form action="{{ route('create_review') }}" method="POST" class="widget-form">
                                @csrf
                                <div class="row">
                                    <div class="form-group rating-select d-flex align-items-center"><label>Your
                                            Rating</label>
                                        <p class="stars"><span><a class="star-1" href="#">1</a> <a class="star-2"
                                                    href="#">2</a> <a class="star-3" href="#">3</a> <a
                                                    class="star-4" href="#">4</a> <a class="star-5"
                                                    href="#">5</a></span></p>
                                    </div>

                                    <div class="col-12 form-group">
                                        <textarea placeholder="Write a Message" class="form-control" name="message"></textarea> <i class="text-title far fa-pencil-alt"></i>
                                    </div>
                                    <div class="col-md-6 form-group"><input type="text" placeholder="Your Name"
                                            class="form-control" name="name"> <i class="text-title far fa-user"></i>
                                    </div>
                                    <div class="col-md-6 form-group"><input type="text" placeholder="Your Email"
                                            class="form-control" name="email"> <i
                                            class="text-title far fa-envelope"></i></div>

                                    <div class="col-12 form-group mb-0"><button class="ot-btn" type="submit">Post
                                            Review</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Include flatpickr CSS and JavaScript -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.widget-form').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('create_booking') }}',
                    data: formData,
                    success: function(response) {

                        // Handle the success response here
                        $('.form-messages').text(response.message);
                    },
                    error: function(xhr, status, error) {
                        console.log("response", xhr.responseJSON.errors);
                        var errors = xhr.responseJSON.errors;
                        // Logging responseJSON
                        // Clear any previous errors
                        $('#error_name').empty();
                        $('#error_email').empty();
                        $('#error_number').empty();
                        $('#error_adult').empty();
                        $('#error_child').empty();
                        $('#error_arrivedate').empty();
                        $('#error_enddate').empty();
                        $('#error_message').empty();



                        if (errors.hasOwnProperty('name')) {
                            $('#error_name').text(errors.name[0]);
                        }
                        if (errors.hasOwnProperty('email')) {
                            $('#error_email').text(errors.email[0]);
                        }

                        if (errors.hasOwnProperty('adult')) {
                            $('#error_adult').text(errors.adult[0]);
                        }

                        if (errors.hasOwnProperty('arrivedate')) {
                            $('#error_arrivedate').text(errors.arrivedate[0]);
                        }
                        if (errors.hasOwnProperty('number')) {
                            $('#error_number').text(errors.number[0]);
                        }

                        if (errors.hasOwnProperty('child')) {
                            $('#error_child').text(errors.child[0]);
                        }
                        if (errors.hasOwnProperty('message')) {
                            $('#error_message').text(errors.message[0]);
                        }

                    }


                });
            });
        });
    </script>
    <script>
        const countrySelect = document.getElementById('country');
        const apiUrl = 'https://restcountries.com/v3.1/all';

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                // Sort the countries alphabetically by name
                const sortedCountries = data.sort((a, b) => {
                    if (a.name.common < b.name.common) return -1;
                    if (a.name.common > b.name.common) return 1;
                    return 0;
                });

                // Populate the dropdown with sorted countries
                sortedCountries.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.name.common; // Use the full name as the value
                    option.textContent = country.name.common;
                    countrySelect.appendChild(option);
                });
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    </script>
    <script>
        flatpickr("#datepicker", {
            dateFormat: "Y-m-d", // Customize the date format as needed
            // You can add more configuration options here
        });
    </script>
    <script>
        flatpickr("#datepicker1", {
            dateFormat: "Y-m-d", // Customize the date format as needed
            // You can add more configuration options here
        });
    </script>
@endsection

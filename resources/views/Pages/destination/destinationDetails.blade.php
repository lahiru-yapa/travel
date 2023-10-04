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
                            <div class="col-xxl-7 col-lg-6">

                                <div class="tour-header">
                                    <h2 class="tour-title">{{ $tour->title }}</h2>
                                    <div class="meta-box-wrap">
                                        <div class="meta-box">
                                            <div class="meta-box_icon"><i class="fal fa-circle-dollar"></i></div>
                                            <div class="media-body">
                                                <h5 class="meta-box_title">From</h5>
                                                <p class="meta-box_text">${{ $tour->price }}</p>
                                            </div>
                                        </div>
                                        <div class="meta-box">
                                            <div class="meta-box_icon"><i class="fal fa-clock"></i></div>
                                            <div class="media-body">
                                                <h5 class="meta-box_title">Duration</h5>
                                                <p class="meta-box_text">{{ $tour->days }} Days</p>
                                            </div>
                                        </div>
                                        <div class="meta-box">
                                            <div class="meta-box_icon"><i class="fal fa-location-dot"></i></div>
                                            <div class="media-body">
                                                <h5 class="meta-box_title">Location</h5>
                                                <p class="meta-box_text">{{ $tour->location }}</p>
                                            </div>
                                        </div>
                                        <div class="meta-box">
                                            <div class="meta-box_icon"><i class="fal fa-users"></i></div>
                                            <div class="media-body">
                                                <h5 class="meta-box_title">Group Size</h5>
                                                <p class="meta-box_text">{{ $tour->group_size }} + </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tour-img"><img src="{{ asset($tour->destination_image) }}" alt="Tour Image">
                                </div>
                            </div>
                            <div class="col-xxl-5 col-lg-6">

                                <aside class="sidebar-area">
                                    <div class="widget widget_book">
                                        <div class="widget-tour-book">
                                            <div class="top">
                                                <h4 class="title">Book This Tour</h4>
                                                <p class="price">${{ $tour->price }}per person</p>
                                            </div>
                                            <form action="{{ route('create_booking') }}" method="POST" class="widget-form">
                                                @csrf
                                                <div class="form-group"><input type="text" class="form-control"
                                                        name="name" id="name" placeholder="Your Name"> <i
                                                        class="fal fa-user"></i></div>
                                                <div class="form-group"><input type="email" class="form-control"
                                                        name="email" id="email" placeholder="Your Email"> <i
                                                        class="fal fa-envelope"></i>
                                                </div>
                                                <div class="row">
                                                    <input type="hidden" name="tower_id" name="tower_id"
                                                        value="{{ $tour->id }}">
                                                    <div class="col-6 form-group"><input type="number" id="quantity"
                                                            name="adult_quantity" min="1" max="100"
                                                            placeholder="adults count" name="adult"></div>
                                                    <div class="col-6 form-group">
                                                        <input type="number" id="quantity" name="child_quantity"
                                                            min="1" max="100" placeholder="child count"
                                                            name="child">
                                                    </div>
                                                </div>
                                                <div class="form-group"><input type="text" class="form-control"
                                                        name="date" id="date" placeholder="mm/dd/yyyyy"> <i
                                                        class="fal fa-calendar-alt"></i>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                                        placeholder="Your Message"></textarea> <i class="fal fa-pencil"></i>
                                                </div>
                                                <div class="form-btn"><button class="ot-btn w-100">Book now</button>
                                                </div>
                                                <p class="form-messages mb-0 mt-3"></p>
                                            </form>
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
                                        <table class="description-table">
                                            <tbody>

                                                <tr>
                                                    <th>Included</th>
                                                    <td>
                                                        {!! $tour->Included !!}
                                                        <br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Excluded</th>
                                                    <td>
                                                        {!! $tour->excluded !!}
                                                        <br>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="plan" role="tabpanel" aria-labelledby="plan-tab">
                                <div class="tour-plan">
                                    <h3 class="inner-title">Tour Plan</h3>
                                    <div class="accordion" id="planAccordion">
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-1"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-1"
                                                    aria-expanded="false" aria-controls="collapse-1">Day 01:
                                                    Departure</button></div>
                                            <div id="collapse-1" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-1" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card active">
                                            <div class="accordion-header" id="collapse-item-2"><button
                                                    class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse-2" aria-expanded="true"
                                                    aria-controls="collapse-2">Day 02: Adventure Begins</button></div>
                                            <div id="collapse-2" class="accordion-collapse collapse show"
                                                aria-labelledby="collapse-item-2" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-3"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-3"
                                                    aria-expanded="false" aria-controls="collapse-3">Day 03: Airplain
                                                    Tour</button></div>
                                            <div id="collapse-3" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-3" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-4"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-4"
                                                    aria-expanded="false" aria-controls="collapse-4">Day 04: Jungle
                                                    Sufary</button></div>
                                            <div id="collapse-4" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-4" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-5"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-5"
                                                    aria-expanded="false" aria-controls="collapse-5">Day 05: Explore
                                                    Culloden</button></div>
                                            <div id="collapse-5" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-5" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-6"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-6"
                                                    aria-expanded="false" aria-controls="collapse-6">Day 06: Loch Ness
                                                    and the Isle of Skye</button></div>
                                            <div id="collapse-6" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-6" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-7"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-7"
                                                    aria-expanded="false" aria-controls="collapse-7">Day 07: Walk the
                                                    Walls of Stirling Castle</button></div>
                                            <div id="collapse-7" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-7" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-8"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-8"
                                                    aria-expanded="false" aria-controls="collapse-8">Day 08: Journey to
                                                    Thriving Glasgow</button></div>
                                            <div id="collapse-8" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-8" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-9"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-9"
                                                    aria-expanded="false" aria-controls="collapse-9">Day 09: Farewell
                                                    Glasgow</button></div>
                                            <div id="collapse-9" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-9" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-card">
                                            <div class="accordion-header" id="collapse-item-10"><button
                                                    class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse-10"
                                                    aria-expanded="false" aria-controls="collapse-10">Day 10:
                                                    Return</button></div>
                                            <div id="collapse-10" class="accordion-collapse collapse"
                                                aria-labelledby="collapse-item-10" data-bs-parent="#planAccordion">
                                                <div class="accordion-body">
                                                    <p class="faq-text">Authoritatively engage transparent users for
                                                        standard compliant vortal. Continually seize technically sound
                                                        applications rather than an expanded array of methodologies.
                                                        Competently envisioneer fully researched "outside the box"
                                                        thinking via team building technologies.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                                <div class="tour-photos">
                                    <div class="row g-4 masonary-active">
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_1.jpg"
                                                    alt="Image"></div>
                                        </div>
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_2.jpg"
                                                    alt="Image"></div>
                                        </div>
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_3.jpg"
                                                    alt="Image"></div>
                                        </div>
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_4.jpg"
                                                    alt="Image"></div>
                                        </div>
                                        <div class="col-md-6 filter-item">
                                            <div class="tour-photo"><img src="assets/img/trip/tour_inner_5.jpg"
                                                    alt="Image"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="location" role="tabpanel" aria-labelledby="location-tab">
                                <div class="tour-location"><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                                        allowfullscreen="" loading="lazy"></iframe></div>
                            </div>
                        </div>
                        <div class="ot-comment-form">
                            <div class="form-title">
                                <h3 class="blog-inner-title">Leave A Reply</h3>
                                <p class="text">Your email address will not be published. Required fields are marked *
                                </p>
                            </div>
                            <div class="row">
                                <div class="form-group rating-select d-flex align-items-center"><label>Your
                                        Rating</label>
                                    <p class="stars"><span><a class="star-1" href="#">1</a> <a class="star-2"
                                                href="#">2</a> <a class="star-3" href="#">3</a> <a
                                                class="star-4" href="#">4</a> <a class="star-5"
                                                href="#">5</a></span></p>
                                </div>
                                <div class="col-12 form-group">
                                    <textarea placeholder="Write a Message" class="form-control"></textarea> <i class="text-title far fa-pencil-alt"></i>
                                </div>
                                <div class="col-md-6 form-group"><input type="text" placeholder="Your Name"
                                        class="form-control"> <i class="text-title far fa-user"></i></div>
                                <div class="col-md-6 form-group"><input type="text" placeholder="Your Email"
                                        class="form-control"> <i class="text-title far fa-envelope"></i></div>
                                <div class="col-12 form-group"><input id="reviewcheck" name="reviewcheck"
                                        type="checkbox"> <label for="reviewcheck">Save my name, email, and website in
                                        this browser for the next time I comment.<span class="checkmark"></span></label>
                                </div>
                                <div class="col-12 form-group mb-0"><button class="ot-btn">Post Review</button></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

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
                        console.log(response);
                        // Handle the success response here
                        $('.form-messages').text(response.message);
                    },
                    error: function(error) {
                        // Handle any errors here
                        console.error(error);
                    }
                });
            });
        });
    </script>
@endsection

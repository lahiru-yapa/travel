<div class="preloader"><button class="ot-btn style3 preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner"><span class="loader"></span></div>
</div>

<div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i
                class="fal fa-search"></i></button></form>
</div>
<div class="ot-menu-wrapper">
    <div class="ot-menu-area text-center"><button class="ot-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="index.html"><img src="assets/img/logo.svg" alt="Travon"></a></div>
        <div class="ot-mobile-menu">
            <ul>
                <li class="menu-item-has-children"><a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home One</a></li>
                        <li><a href="index-2.html">Home Two</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Destination</a>
                    <ul class="sub-menu">
                        <li><a href="destination.html">Destination</a></li>
                        <li><a href="destination-details.html">Destination Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Tour Types</a>
                    <ul class="sub-menu">
                        <li><a href="tour.html">Tour</a></li>
                        <li><a href="tour-details.html">Tour Details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="team.html">Team</a></li>
                        <li><a href="team-details.html">Team Details</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="error.html">Error Page</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<header class="ot-header header-layout1">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="fal fa-phone"></i><a href="tel:+256214203215">256 214 203 215</a></li>
                            <li class="d-none d-xl-inline-block"><i class="fal fa-envelope"></i><a
                                    href="mailto:info@travon.com">info@travon.com</a></li>
                            <li><i class="fal fa-location-dot"></i>9550 Bolsa Ave #126, United States</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            {{-- <li class="d-none d-lg-inline-block"><i class="far fa-user"></i><a
                                    href="contact.html">Login / Register</a></li>
                            <li> --}}
                            <div class="header-social"><span class="social-title">Follow Us:</span> <a
                                    href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a
                                    href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                    href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                    href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> <a
                                    href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo"><a href="index.html"><img src="assets/img/logo.svg" alt="Travon"></a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>

                                <li class="menu-item-has-children"><a href="#">Adventure Categories
                                    </a>
                                    <ul class="sub-menu">
                                        {{-- <li><a href="{{ route('destination1', ['id' => 1]) }}">Hiking and
                                                Trekking</a></li>
                                        <li><a href="{{ route('destination1', ['id' => 2]) }}">Mountain Abseiling </a>
                                        </li>
                                        <li><a href="{{ route('destination1', ['id' => 3]) }}">Waterfall Abseiling </a>
                                        </li>
                                        <li><a href="{{ route('destination1', ['id' => 4]) }}">Kayaking </a></li>
                                        <li><a href="{{ route('destination1', ['id' => 5]) }}">Surfing </a></li>
                                        <li><a href="{{ route('destination1', ['id' => 6]) }}">Water Rafting</a></li>
                                        <li><a href="{{ route('destination1', ['id' => 7]) }}">Gutsy girls (girls only
                                                hike/ abseil)</a></li>
                                        <li><a href="{{ route('destination1', ['id' => 8]) }}">Couple Tours</a></li>
                                        <li><a href="{{ route('destination1', ['id' => 9]) }}">Village Tours</a></li> --}}
                                    </ul>
                                </li>

                                <li class="menu-item-has-children"><a href="#">Best Holiday Packages</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Fammily trip</a></li>
                                        <li><a href="blog-details.html">Romantic Gateway</a></li>
                                        <li><a href="blog.html">Cultural tours</a></li>
                                        <li><a href="blog-details.html">Ramayanaya Trail</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="contact.html" class="ot-btn ml-25">Book Your Stay</a>

                        </div>

                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>

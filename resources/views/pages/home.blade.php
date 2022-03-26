    @extends('layouts.app')

    @section('title')
        PENTORCH
    @endsection

    @section('content')
    <body id="page-top">
        <div id="preloader"></div>
    <!-- Header -->
        <header class="text-center">
        <h1 data-aos="zoom-in" data-aos-duration="2500">
            Explore The Beautiful World
            <br />
            As Easy One Click
        </h1>
        <p data-aos="zoom-in" data-aos-duration="2500 class="mt-3">
            You will see beautiful
            <br />
            moment you never see before
        </p>
            <!-- <a href="#" class="btn btn-get-started px-4 mt-4"> Get Started </a> -->
            <a href="#popular" class="btn btn-get-started px-4 mt-4" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="1000">Get Started</a>
        </header>

        <main>
        <div class="container d-flex justify-content-center">
            <section
            class="section-stats row justify-content-between text-center"
            id="stats"
            >
            <div class="col-3 col-md-2 stats-detail">
                <h2 class="num">80</h2>
                    <h2 class="detail">K</h2>
                    <p>Members</p>
                </div>

                <div class="vl"></div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2 class="num">50</h2>
                    <h2 class="detail text-white">+</h2>
                    <p>Countries</p>
                </div>

                <div class="vl"></div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2 class="num">10</h2>
                    <h2 class="detail">K</h2>
                    <p>Hotels</p>
                </div>

                <div class="vl"></div>

                <div class="col-3 col-md-2 stats-detail">
                    <h2 class="num">75</h2>
                    <h2 class="detail text-white">+</h2>
                    <p>Partners</p>
            </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading" data-aos="fade-up" data-aos-duration="100">
                <h2>Wisata Popular</h2>
                <p>
                    Something that you never try
                    <br/>
                    before in this world
                </p>
                </div>
            </div>
            </div>
        </section>
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="100" data-aos-delay="250">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('{{ $item->galleries->count()? Storage:: url
                            ($item->galleries->first()->image) : ''  }}');">
                            <div class="travel-country">{{ $item->location}}</div>
                            <div class="travel-location">{{ $item->title}}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-5">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
            <div class="row">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                <h2>Our Networks</h2>
                <p>
                    Companies are trusted us
                    <br />
                    more than just a trip
                </p>
                </div>
                <div class="col-md-8 text-center" data-aos="fade-up" data-aos-duration="200">
                <img src="frontend/images/logos_partner.png" alt="Logo Partner">
                </div>
            </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
            <div class="row">
                <div class="col text-center" data-aos="fade-up" data-aos-duration="100">
                <h2>They Are Loving Us</h2>
                    <p>
                    Moment were giving them
                    <br / >
                    the best experience
                    </p>
                </div>
            </div>
            </div>
        </section>

        <section class="section section-testimonial-content">
            <div class="container">
            <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img src="frontend/images/testimonial1.png" alt="User" class="mb-4 rounded-circle">
                    <h3 class="mb-4">Sundar Pichai</h3>
                    <p class="testimonial">
                        “ It was glorious and I could not stop to say wohooo for every single moment Dankeeeeee “
                    </p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                    Trip to Ubud, Bali, Indonesia
                    </p>
                </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up"  data-aos-delay="200">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img src="frontend/images/testimonial2.png" alt="User" class="mb-4 rounded-circle">
                    <h3 class="mb-4">Bill Gates</h3>
                    <p class="testimonial">
                        “ I am very satisfied with the transportation & very comfortable I hope I can return to Bromo. “
                    </p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                    Trip to Bromo, Indonesia
                    </p>
                </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4" data-aos="fade-up"  data-aos-delay="300">
                <div class="card card-testimonial text-center">
                    <div class="testimonial-content">
                    <img src="frontend/images/testimonial3.png" alt="User" class="mb-4 rounded-circle">
                    <h3 class="mb-4">Willy Agustino Efendi</h3>
                    <p class="testimonial">
                    “ The trip was amazing and I saw something beautiful in that Japan makes me want to learn more “
                    </p>
                    </div>
                    <hr>
                    <p class="trip-to mt-2">
                    Trip to Tokyo, Japan
                    </p>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                <a href="#" class="btn btn-need-help px-4 mt-4 mx-1" data-aos="fade-up" data-aos-duration="100" data-aos-delay="100">
                    I Need Help
                </a>
                <a href="#" class="btn btn-get-started px-4 mt-4 mx-1" data-aos="fade-up" data-aos-duration="100" data-aos-delay="200">
                    Get Started
                </a>
                </div>
            </div>
            </div>
        </section>
        </main>
    @endsection

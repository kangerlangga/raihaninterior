<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.public.head')
</head>

@section('content')
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="{{ asset('assets/logo/logo.png') }}" width="64" height="64" alt="Icon">
    </div>
    <!-- Spinner End -->
    @include('layouts.public.nav')
    <?php if ($cHS > 0) : ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($HomeSlider as $H)
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ url('') }}/assets/public/img/HomeSlider/{{ $H->image_home_sliders }}'>">
                <img class="img-fluid" src="{{ url('') }}/assets/public/img/HomeSlider/{{ $H->image_home_sliders }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">{{ $H->title_home_sliders }}</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">{{ $H->desc_home_sliders }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->
    <?php endif;?>
    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ url('') }}/assets/public/img/icons/icon-2.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Design Approach</h3>
                        <p class="mb-0">We combine creativity with functionality, delivering designs that not only look great but also serve your needs efficiently.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ url('') }}/assets/public/img/icons/icon-3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Innovative Solutions</h3>
                        <p class="mb-0">Our solutions blend innovation and practicality, ensuring that every space is tailored to your unique requirements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ url('') }}/assets/public/img/icons/icon-4.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Project Management</h3>
                        <p class="mb-0">Our team ensures seamless project execution, from initial planning to final delivery, with a focus on quality and timelines.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Services</h4>
                <h1 class="display-5 mb-4">We Focused On Modern Architecture And Interior Design</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ url('') }}/assets/public/img/service-1.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ url('') }}/assets/public/img/icons/icon-5.png" alt="Icon">
                            <h3 class="mb-3">Architecture</h3>
                            <p class="mb-4">Our architectural services are designed to create functional, sustainable, and aesthetically pleasing spaces tailored to your needs.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ url('') }}/assets/public/img/service-2.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ url('') }}/assets/public/img/icons/icon-6.png" alt="Icon">
                            <h3 class="mb-3">3D Animation</h3>
                            <p class="mb-4">We bring your vision to life with detailed 3D animations, offering a realistic preview of your project before construction begins.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ url('') }}/assets/public/img/service-3.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ url('') }}/assets/public/img/icons/icon-7.png" alt="Icon">
                            <h3 class="mb-3">House Planning</h3>
                            <p class="mb-4">Our house planning services ensure that every detail of your home is meticulously designed to match your lifestyle and preferences.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ url('') }}/assets/public/img/service-4.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ url('') }}/assets/public/img/icons/icon-8.png" alt="Icon">
                            <h3 class="mb-3">Interior Design</h3>
                            <p class="mb-4">We specialize in creating stunning interior designs that reflect your personality, combining style with functionality.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ url('') }}/assets/public/img/service-5.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ url('') }}/assets/public/img/icons/icon-9.png" alt="Icon">
                            <h3 class="mb-3">Renovation</h3>
                            <p class="mb-4">Our renovation services will revitalize your space, ensuring it meets modern standards while preserving its original charm.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ url('') }}/assets/public/img/service-6.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ url('') }}/assets/public/img/icons/icon-10.png" alt="Icon">
                            <h3 class="mb-3">Construction</h3>
                            <p class="mb-4">From concept to completion, our construction services ensure your project is built with the highest quality and precision.</p>
                            <a class="btn" href=""><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Why Choose Us!</h4>
                    <h1 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h1>
                    <p class="mb-4">Our team is dedicated to delivering top-notch services with a customer-focused approach. We believe in transparent communication, innovative designs, and excellent execution to meet all your expectations.</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ url('') }}/assets/public/img/icons/icon-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Design Approach</h3>
                                    <p class="mb-0">Our design process is centered around creativity and functionality, ensuring that every project is tailored to your vision.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ url('') }}/assets/public/img/icons/icon-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Innovative Solutions</h3>
                                    <p class="mb-0">We leverage the latest technologies and innovative techniques to bring you unique solutions for every challenge.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ url('') }}/assets/public/img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Project Management</h3>
                                    <p class="mb-0">With a strong focus on detail and time management, we ensure that your project is completed on time and within budget.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ url('') }}/assets/public/img/about-2.jpg" alt="">
                        <img class="img-fluid" src="{{ url('') }}/assets/public/img/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Testimonials</h4>
                <h1 class="display-5 mb-4">Delivering Quality and Satisfaction in Every Project</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{ url('') }}/assets/public/img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">"Their interior design transformed our space into a stunning and functional home. The attention to detail and the ability to capture our vision was truly impressive. We're beyond satisfied!"</p>
                    <h3>Alice Turner</h3>
                    <span class="text-primary">Homeowner</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{ url('') }}/assets/public/img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">"The custom furniture they created for our office is exceptional. Every piece fits perfectly, and the quality is outstanding. Their service was professional and timely. Highly recommend!"</p>
                    <h3>Michael Scott</h3>
                    <span class="text-primary">Office Manager</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='{{ url('') }}/assets/public/img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">"From start to finish, the team delivered excellence. Our renovation was completed on time, and the results were beyond our expectations. The craftsmanship and service were top-notch!"</p>
                    <h3>Sarah Lee</h3>
                    <span class="text-primary">Property Developer</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    @include('layouts.public.footer')
    @include('layouts.public.script')
@endsection

<body>
    @yield('content')
</body>
</html>

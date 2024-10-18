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
    @include('layouts.public.header')
    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Projects</h4>
                <h1 class="display-5 mb-4">Explore Our Latest Projects and Innovative Works</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. Interior Design Services</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Sofa Production</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Furniture & Cabinetry</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Home Contracting</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ url('') }}/assets/public/img/Project/1.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years of Experience in Interior Design</h1>
                                    <p class="mb-4">With a passion for aesthetics and functionality, we bring over 25 years of experience to create stunning interior spaces that reflect your unique style.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Customized Design Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Quality Craftsmanship</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Timely Project Completion</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ url('') }}/assets/public/img/Project/4.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Expert Sofa Production Services</h1>
                                    <p class="mb-4">Our skilled craftsmen dedicate their expertise to produce premium sofas that blend comfort and style, tailored to meet your specific needs and preferences.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Premium Materials</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Designs</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Durable Construction</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ url('') }}/assets/public/img/Project/3.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Quality Furniture Solutions</h1>
                                    <p class="mb-4">From innovative concepts to flawless execution, we craft high-quality furniture solutions that enhance any space while maintaining an emphasis on practicality and design.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Custom Furniture Design</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Sustainable Practices</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Attention to Detail</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ url('') }}/assets/public/img/Project/2.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Trusted Home Contractors</h1>
                                    <p class="mb-4">As seasoned professionals in home contracting, we offer comprehensive services that transform your vision into reality, ensuring quality and satisfaction at every stage.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>End-to-End Service</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Licensed and Insured</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Client-Centric Approach</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->

    @include('layouts.public.footer')
    @include('layouts.public.script')
@endsection

<body>
    @yield('content')
</body>
</html>

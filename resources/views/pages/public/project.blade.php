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
    <?php if ($cP > 0) : ?>
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
                        <?php $no = 1; ?>
                        @foreach ($Project as $P)
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 {{ $loop->first ? 'active' : '' }}"data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $no }}" type="button">
                                <h3 class="m-0">{{ str_pad($no, 2, '0', STR_PAD_LEFT) }}. {{ $P->name_projects }}</h3>
                            </button>
                            <?php $no++; ?>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <?php $nom = 1; ?>
                        @foreach ($Project as $P)
                        <div class="tab-pane fade show {{ $loop->first ? 'active' : '' }}" id="tab-pane-<?= $nom++; ?>">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="{{ url('') }}/assets/public/img/Project/{{ $P->image_projects }}" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">{{ $P->title_projects }}</h1>
                                    <p class="mb-4">{{ $P->desc_projects }}</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>{{ $P->poin_a_projects }}</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>{{ $P->poin_b_projects }}</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>{{ $P->poin_c_projects }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->
    <?php endif;?>
    @include('layouts.public.footer')
    @include('layouts.public.script')
@endsection

<body>
    @yield('content')
</body>
</html>

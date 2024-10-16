<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ route('home.publik') }}" class="navbar-brand ms-3 ms-lg-0">
        <h1 class="text-primary m-0"><img class="me-3" src="{{ asset('assets/logo/logo.png') }}" width="64" height="64" alt="Logo">Raihan Interior</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home.publik') }}" class="nav-item nav-link {{ Request::routeIs('home.publik') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about.publik') }}" class="nav-item nav-link {{ Request::routeIs('about.publik') ? 'active' : '' }}">About</a>
            <a href="{{ route('project.publik') }}" class="nav-item nav-link {{ Request::routeIs('project.publik') ? 'active' : '' }}">Project</a>
            <a href="{{ route('contact.publik') }}" class="nav-item nav-link {{ Request::routeIs('contact.publik') ? 'active' : '' }}">Contact</a>
        </div>
        <a href="{{ route('contact.publik') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Appointment</a>
    </div>
</nav>
<!-- Navbar End -->

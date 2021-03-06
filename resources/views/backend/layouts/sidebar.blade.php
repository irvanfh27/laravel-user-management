<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ asset('backend') }}/index.html">
            <img src="{{ asset('backend') }}/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        @include('backend.layouts.navbar-mobile')
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('dashboard.index') }}">
                            <img src="{{ asset('backend') }}/assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main"
                            aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">
                        <i class="ni ni-tv-2 text-primary"></i> Dashboard
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ asset('backend') }}/examples/icons.html">
                        <i class="ni ni-planet text-blue"></i> Icons
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('backend') }}/examples/maps.html">
                        <i class="ni ni-pin-3 text-orange"></i> Maps
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('backend') }}/examples/profile.html">
                        <i class="ni ni-single-02 text-yellow"></i> User profile
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('data.user') }}">
                        <i class="ni ni-bullet-list-67 text-red"></i> Data User
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ asset('backend') }}/examples/login.html">
                        <i class="ni ni-key-25 text-info"></i> Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ asset('backend') }}/examples/register.html">
                        <i class="ni ni-circle-08 text-pink"></i> Register
                    </a>
                </li> --}}
            </ul>
            <!-- Divider -->
            {{-- <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">Documentation</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
                        <i class="ni ni-spaceship"></i> Getting started
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
                        <i class="ni ni-palette"></i> Foundation
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
                        <i class="ni ni-ui-04"></i> Components
                    </a>
                </li>
            </ul> --}}
        </div>
    </div>
</nav>

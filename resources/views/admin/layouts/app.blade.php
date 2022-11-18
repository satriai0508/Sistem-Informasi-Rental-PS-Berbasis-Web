@include('admin.partials.header')
  {{-- <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div> --}}
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin6">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
          <a class="navbar-brand" href="{{ route('home') }}">
            <b class="logo-icon">
              <img src="/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
            </b>
            <span class="logo-text">
              <img src="/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
            </span>
          </a>
          <a class="
                nav-toggler
                waves-effect waves-light
                text-dark
                d-block d-md-none
              " href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    @include('admin.partials.navbar')
    <div class="page-wrapper">
      @yield('breadcrumbs')
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @yield('content')
          </div>
        </div>
      </div>
     @include('admin.partials.watermark')
    </div>
  </div>
@include('admin.partials.footer')

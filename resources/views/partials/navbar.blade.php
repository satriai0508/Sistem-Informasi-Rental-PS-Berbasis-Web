<header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
        <ul>
            <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
            <li><a href="#system" class="nav-link scrollto"><i class="bx bx-server"></i> <span>System</span></a></li>
            <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            @guest
            <li><a href="{{ route('login') }}" class="nav-link scrollto"><i class="bx bxs-user-account"></i> <span>Login</span></a></li>
            <li><a href="{{ route('register') }}" class="nav-link scrollto"><i class="bx bx-user-plus"></i> <span>Register</span></a></li>
            @endguest
            @auth
            <li><a href="{{ route('home') }}" class="nav-link scrollto"><i class="bx bxs-dashboard"></i> <span>Home</span></a></li>
            @endauth
        </ul>
    </nav><!-- .nav-menu -->

</header>

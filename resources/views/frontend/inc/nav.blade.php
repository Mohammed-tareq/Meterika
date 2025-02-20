<!--===================================== start Navbar =============================================-->

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img width="150" src="{{ asset('css/imgs/logo.png') }}" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarScroll"
            aria-controls="navbarScroll"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}" href="{{ route('service') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('project') ? 'active' : '' }}" href="{{ route('project') }}">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('About-Us') ? 'active' : '' }}" href="{{ route('About-Us') }}">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Social Media Sidebar -->
<div class="social-sidebar">
    <a
        href="https://www.facebook.com/p/Meterika-100075685885039/"
        target="_blank"
        class="social-link facebook"><i class="fa-brands fa-facebook-f"></i></a>
    <a
        href="https://www.instagram.com/meterika__/"
        target="_blank"
        class="social-link twitter"><i class="fa-brands fa-instagram"></i></a>
    <a
        href="https://www.linkedin.com/company/meterika/?originalSubdomain=eg"
        target="_blank"
        class="social-link instagram"><i class="fa-brands fa-linkedin"></i></a>
</div>

<!--===================================== end Navbar ================================================-->

<!-- Main Header -->
<header class="main-header">

  <!-- Logo -->
  <a href="{{ route('index') }}" class="logo"><b>Admin</b>Meterkia</a>

  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="{{Auth::user()->image }}" class="user-image" alt="User Image"/>
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="{{Auth::user()->image }}" class="img-circle" alt="User Image" />
              <p>
                {{ Auth::user()->name }} - Admin
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-right">
                    <a class="btn  text-white btn-flat" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>

            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

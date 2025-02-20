<style>
    .menu-open {
        display: block !important;
    }

    .active {
        font-weight: bold;

    }
</style>


<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Auth::user()->image }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{ route('index') }}"><span>Home Page</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul
                class="treeview-menu {{ Route::is('slider.index') ||
                Route::is('commitment.index') ||
                Route::is('services.index') ||
                Route::is('parteners.index') ||
                Route::is('projectsHome.index')
                    ? 'menu-open'
                    : '' }}  ">

                <li class="{{ Route::is('slider.index') ? 'active' : '' }}">
                    <a href="{{ route('slider.index') }}">Slider Control</a>
                </li>
                <li class="{{ Route::is('commitment.index') ? 'active' : '' }}">
                    <a href="{{ route('commitment.index') }}">Commitment Control</a>
                </li>

                <li class="{{ Route::is('projectsHome.index') ? 'active' : '' }}">
                    <a href="{{ route('projectsHome.index') }}">Projects Home Control</a>
                </li>
                <li class="{{ Route::is('services.index') ? 'active' : '' }}">
                    <a href="{{ route('services.index') }}">Services Home Control</a>
                </li>
                <li class="{{ Route::is('parteners.index') ? 'active' : '' }}">
                    <a href="{{ route('parteners.index') }}">Parteners Image Control</a>
                </li>
                <li class="{{ Route::is('videos.index') ? 'active' : '' }}">
                    <a href="{{ route('videos.index') }}">Last Video Home Control</a>
                </li>
            </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{ route('index') }}"><span>Service Page</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul
                    class="treeview-menu {{ Route::is('videoService.index') ||
                    Route::is('ShowService-SecOne.index') ||
                    Route::is('ShowService-SecTwo.index') ||
                    Route::is('ShowService-SecThree.index') ||
                    Route::is('ShowService-SecFour.index')
                        ? 'menu-open'
                        : '' }}  ">

                    <li class="{{ Route::is('videoService.index') ? 'active' : '' }}">
                        <a href="{{ route('videoService.index') }}">Video Service Page</a>
                    </li>
                    <li class="{{ Route::is('ShowService-SecOne.index') ? 'active' : '' }}">
                        <a href="{{ route('ShowService-SecOne.index') }}">Service Sec One </a>
                    </li>
                    <li class="{{ Route::is('ShowService-SecTwo.index') ? 'active' : '' }}">
                        <a href="{{ route('ShowService-SecTwo.index') }}">Service Sec Two </a>
                    </li>
                    <li class="{{ Route::is('ShowService-SecThree.index') ? 'active' : '' }}">
                        <a href="{{ route('ShowService-SecThree.index') }}">Service SecThree</a>
                    </li>
                    <li class="{{ Route::is('ShowService-SecFour.index') ? 'active' : '' }}">
                        <a href="{{ route('ShowService-SecFour.index') }}">Service-SecFour</a>
                    </li>
                </ul>


            </li>
        </ul>
        <!-- /End .sidebar-menu -->

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{ route('projects.index') }}"><span>Projects Page</span> </a>
            </li>
        </ul><!-- /.sidebar-menu -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{ route('galleries.index') }}"><span>Gallery Page</span> </a>
            </li>
        </ul><!-- /.sidebar-menu -->

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{route('AboutUs.index')}}"><span>Video About Page</span></a>

            </li>
        </ul><!-- /.sidebar-menu -->

    </section>
    <!-- /.sidebar -->
</aside>

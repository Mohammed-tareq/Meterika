<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('css/imgs/icon.png') }}" />
    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">

    <!-- start Font -->
    <link rel="stylesheet" href="{{ asset('Font/Gotham Medium.ttf') }}" />
    <!-- End Font -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" />
    @stack('css')
  
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <title>METERIKA</title>
</head>


<body>
    <header>

        @include('frontend.inc.nav')

        <!--===================================== end Navbar ================================================-->
    </header>

    <main>
        <!--===================================== start video ==========================================================-->
        @yield('sec1')

        <!--===================================== end video  ===========================================================-->

        <!--============================================ Start Section about ==========================================-->
        @yield('sec2')




        <!--============================================ end Section about ===========================================-->

        <!--============================================ Start Section commitments ===================================-->
        @yield('sec3')


        <!--============================================ end Section commitments ======================================-->

        <!--======================================== Start Section project  ===========================================-->
        @yield('sec4')



        <!--======================================== end Section project ===============================================-->

        <!--======================================== Start Section our services ==========================================-->
        @yield('sec5')


        <!--======================================== end Section our services ============================================-->

        <!--======================================== start Section poweing  ==============================================-->
        @yield('sec6')


        <!--======================================== end Section poweing  ==============================================-->

        <!--======================================== start Section gallery =============================================-->
        @yield('sec7')


        <!--======================================== end Section gallery ==============================================-->

        <!--======================================== start Section parteners ===========================================-->
        @yield('sec8')


        <!--======================================== end Section parteners =============================================-->

        <!--======================================== start Section last-video ==========================================-->
        @yield('sec9')


        <!--======================================== end Section last-video ============================================-->

        <br />

        <!--======================================== start Section photo-foter ==========================================-->
        @yield('sec10')


        <!--======================================== end Section photo-foter ============================================-->
    </main>

    @include('frontend.inc.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/navbar.js') }}"></script>
    <script src="{{ asset('js/video.js') }}"></script>
    @stack('js')
    <script src="{{ asset('js/footer.js') }}"></script>

</body>

</html>

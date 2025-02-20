@extends('frontend.inc.header')

{{-- sec1 --}}
@section('sec1')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        @if ($slider)
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video controls autoplay muted style="width: 100%; height: 100%" src="{{ $slider->slider_video }}"
                        class="d-block w-100" alt="..."></video>

                    <div class="carousel-caption d-md-block custom-scrollanim custom-scrollanim-active">
                        <h3>POWERING <span>SPACES</span></h3>
                        <a href="{{ route('service') }}"><button class="view-services">VIEW SERVICES</button></a>
                        <a href="{{ route('project') }}"><button class="view-projects">VIEW PROJECTS</button></a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" style="width: 100%; height: 100%" src="{{ $slider->slider_img_one }}" />
                    <div class="carousel-caption d-md-block custom-scrollanim custom-scrollanim-active">
                        <h3>POWERING <span>SPACES</span></h3>
                        <a href="{{ route('service') }}"><button class="view-services">VIEW SERVICES</button></a>
                        <a href="{{ route('project') }}"><button class="view-projects">VIEW PROJECTS</button></a>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" style="width: 100%; height: 100%" src="{{ $slider->slider_img_two }}" />
                    <div class="carousel-caption d-md-block custom-scrollanim custom-scrollanim-active">
                        <h3>POWERING <span>SPACES</span></h3>
                        <a href="{{ route('service') }}"><button class="view-services">VIEW SERVICES</button></a>
                        <a href="{{ route('project') }}"><button class="view-projects">VIEW PROJECTS</button></a>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
{{-- sec2 --}}

@section('sec2')
    <section id="about">
        <div class="text" data-aos="fade-up" data-aos-duration="3000" data-aos-anchor-placement="bottom-bottom">
            <h2>ABOUT METERIKA</h2>
            <!-- title end -->

            <h4>
                AT METERIKA, WE ARE AN INNOVATIVE ENGINEERING FIRM THAT SPECIALIZES
                IN DELIVERING EXCEPTIONAL MECHANICAL, ELECTRICAL, AND PLUMBING (MEP)
                SERVICES, AS WELL AS CUTTING-EDGE HEATING AND HOME AUTOMATION
                SOLUTIONS. OUR UNWAVERING COMMITMENT TO EXCELLENCE IS REFLECTED IN
                OUR ABILITY TO SEAMLESSLY INTEGRATE THE HIGHEST TECHNICAL STANDARDS
                WITH THE ARTISTIC VISION OF OUR PROJECT PARTNERS.
            </h4>
        </div>

        <div class="custom-scrollanim custom-scrollanim-active">
            <a href="{{ route('About-Us') }}"><button class="more">MORE</button></a>
        </div>
    </section>
@endsection

{{-- sec3 --}}
@section('sec3')
    @if ($commitment)
        <section id="commitments" class="pt-5">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="image-container">
                            <div class="anim-img-scale js-img-scale js-img-scale-active">
                                <img class="anim-img-scale__inner" src="{{ $commitment->img }}" alt="Image" />
                            </div>
                            <div>
                                <div class="counter" data-count="19450" data-position="top-left">
                                    0
                                </div>
                                <div class="counter" data-count="227200" data-position="bottom-center">
                                    0
                                </div>
                                <div class="counter" data-count="21" data-position="top-right">
                                    0
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <!-- title start -->
                        <div class="text" data-aos="fade-up" data-aos-duration="3000"
                            data-aos-anchor-placement="bottom-bottom">
                            <h2>OUR COMMITMENTS</h2>
                            <!-- title end -->

                            <h4 class="w-100">
                                {{ $commitment->title }}
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
{{-- sec4 --}}
@section('sec4')
    @if ($projects)
        <section class="pos-rel section-bg-light-2 pt-5  " data-midnight="black" id="projects">
            <!-- pos-rel start -->
            <div class="pos-rel padding-top-bottom-120">
                <!-- title start -->
                <h2 class="headline-xxxl hidden-box js-scrollanim js-scrollanim-active fs-1">
                    PROJECTS
                </h2>
                <!-- title end -->

                <!-- flex-container start -->
                <div class="flex-container flex-justify-center padding-top-30">
                    <!-- column start -->
                    @foreach ($projects as $project)
                        <div class="six-columns padding-top-60">
                            <div class="column-l-r-margin-20">
                                <div class="anim-img-scale js-img-scale js-img-scale-active">
                                    <img class="anim-img-scale__inner" src="{{ asset($project->img) }}" alt="image" />
                                </div>
                                <div class="text-center margin-top-20 js-scrollanim js-scrollanim-active">
                                    <h4 class="headline-xxxs hidden-box">
                                        <span class="anim-slide tr-delay-01">{{ $project->name }}</span>
                                    </h4>
                                    <span class="subhead-xxs d-block hidden-box margin-top-5">
                                        <span class="anim-slide tr-delay-02">{{ $project->description }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- column end -->
                    @endforeach


                </div>
                <!-- flex-container end -->

                <div class="custom-scrollanim custom-scrollanim-active">
                    <a href="{{ route('project') }}"><button class="more">MORE</button></a>
                </div>
            </div>
            <!-- pos-rel end -->
        </section>
    @endif
@endsection
@section('sec4')
@endsection



{{-- sec5 --}}
@section('sec5')
    @if ($services)
        <section id="ourservices">
            <div>
                <h2>services</h2>
                <h4>SEAMLESSLY INTEGRATED</h4>
            </div>

            <div class="container servicescontent">
                <!-- المحتوى الأول -->
                <div class="row">

                    <div class="col-md-4 p-3">
                        <div class="position-relative type-of-food overflow-hidden">
                            <img src="{{ $services[0]->img }}" class="w-100 rounded-3"
                                alt="{{ $services[0]->name }}" />
                            <div class="food-layer d-flex justify-content-center align-items-center">
                                <h5>{{ $services[0]->name }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="position-relative type-of-food overflow-hidden">
                            <img src="{{ $services[1]->img }}" class="w-100 rounded-3"
                                alt="{{ $services[1]->name }}" />
                            <div class="food-layer d-flex justify-content-center align-items-center">
                                <h5>{{ $services[1]->name }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="position-relative type-of-food overflow-hidden">
                            <img src="{{ $services[2]->img }}" class="w-100 rounded-3"
                                alt="{{ $services[2]->name }}" />
                            <div class="food-layer d-flex justify-content-center align-items-center">
                                <h5>{{ $services[3]->name }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row min-img">
                    <div class="col-md-6 p-3">

                        <div class="position-relative type-of-food overflow-hidden">
                            <img src="{{ $services[3]->img }}" class="w-100 rounded-3"
                                alt="{{ $services[3]->name }}" />
                            <div class="food-layer d-flex justify-content-center align-items-center">
                                <h5>{{ $services[3]->name }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-3">
                        <div class="position-relative type-of-food overflow-hidden">
                            <img src="{{ $services[4]->img }}" class="w-100 rounded-3"
                                alt="{{ $services[4]->name }}" />
                            <div class="food-layer d-flex justify-content-center align-items-center">
                                <h5>{{ $services[4]->name }}</h5>
                            </div>
                        </div>
                    </div>


                </div>



                <div class="scroll-text">
                    <a href="{{ route('service') }}"><button class="scroll-text more">More</button></a>
                </div>

        </section>
    @endif
@endsection
{{-- sec6 link --}}
@section('sec6')
    <section id="powering">
        <img src="{{ asset('css/imgs/powering.webp') }}" class="w-100" />
    </section>
@endsection
{{-- sec7 link --}}
@section('sec7')
    <section id="gallery">
        <div class="textproject">
            <h2>OUR GALLERY</h2>
        </div>
        @if ($gallreies)
            <div id="container">
                <div class="photobanner">
                    @foreach ($gallreies as $gallrey)
                        <img src="{{ $gallrey->img }}" alt="image" class="w-100" />
                    @endforeach
                </div>

            </div>
        @endif

        <div class="custom-scrollanim custom-scrollanim-active">
            <a href="{{ route('gallery') }}"><button class="more">MORE</button></a>
        </div>
    </section>
@endsection
{{-- sec8 link --}}
@section('sec8')
    @if ($partener)
        <section id="parteners" >
            <div class="mb-0">
                <h2 >PARTENERS</h2>
            </div>

            <img src="{{ $partener->img }}" class="w-100" />
        </section>
    @endif
@endsection
{{-- sec9 link --}}
@section('sec9')
    @if ($video)
        <section id="last-video">
            <video controls autoplay loop style="width: 100%; height: 100%" src="{{ $video->video }}">
                class="d-block w-100" alt="..."></video>
        </section>
    @endif
@endsection
{{-- sec10 --}}
@section('sec10')
    <section id="photo-foter">
        <div class="container-fluid text-center">
            <div class="title">
                <h2 class=" ">WE ‘RE HERE FOR YOU</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <!-- title start -->
                    <div class="text" data-aos="fade-down" data-aos-duration="3000"
                        data-aos-anchor-placement="bottom-bottom">
                        <!-- title end -->
                        <a href="https://meterika.com/" target="_blank">
                            <h3>
                                <i class="fa-solid fa-envelope"></i> Email:
                                <span>WWW.METERIKA.COM</span>
                            </h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <!-- title start -->
                    <div class="text" data-aos="fade-down" data-aos-duration="3000"
                        data-aos-anchor-placement="bottom-bottom">
                        <a href="https://maps.app.goo.gl/4VMPLxjbLK7G2Lsv7" target="_blank">
                            <h3>
                                <i class="fa-solid fa-location-dot"></i> Location:
                                <span>EL YASMINE 8 , VILLA 305 New Cairo , Cairo Egypt</span>
                            </h3>
                        </a>
                        <!-- title end -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="text" data-aos="fade-down" data-aos-duration="3000"
                        data-aos-anchor-placement="bottom-bottom">
                        <h3>
                            <a href="tel:+20 1005281847 ">
                                <i class="fa-solid fa-phone"></i> Phone Number :
                                <span>+201005281847</span>
                            </a>
                        </h3>
                        <!-- title end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

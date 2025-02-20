@extends('frontend.inc.header')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
@endpush

@section('sec1')
    @if ($video)
        <section id="animation">
            <div class="custom-container">
                <video muted controls autoplay src="{{ $video->video }}" class="d-block w-100" alt="..."></video>
            </div>
        </section>
    @endif
@endsection

@section('sec2')
    <section id="project">
        <div class="container text-center">
            <!-- Add a wrapper div for consistent spacing -->
            <div class="section-wrapper">
                <div class="row ">
                    <div class="col">
                        <!-- title start -->
                        <div class="text" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="0">
                            <h2>ABOUT METERIKA</h2>
                            <!-- title end -->
                            <h4>
                                AAT METERIKA, WE ARE AN INNOVATIVE ENGINEERING FIRM THAT
                                SPECIALIZES IN DELIVERING EXCEPTIONAL MECHANICAL, ELECTRICAL,
                                AND PLUMBING (MEP) SERVICES, AS WELL AS CUTTING-EDGE HEATING
                                AND HOME AUTOMATION SOLUTIONS. OUR UNWAVERING COMMITMENT TO
                                EXCELLENCE IS REFLECTED IN OUR ABILITY TO SEAMLESSLY INTEGRATE
                                THE HIGHEST TECHNICAL STANDARDS WITH THE ARTISTIC VISION OF
                                OUR PROJECT PARTNERS.
                            </h4>
                        </div>
                    </div>

                    <div class="col">
                        <div class="image-container">
                            <div data-aos="fade-right" data-aos-duration="2000" data-aos-offset="0">
                                <img src="{{ asset('css/imgs/y4.png') }}" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add spacing between rows -->
                <div class="row " >
                    <div class="col">
                        <!-- title start -->
                        <div class="text2" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="0">
                            <h2>OUR COMMITMENTS</h2>
                            <!-- title end -->
                            <h4 >
                                WE ARE COMMITTED TO SUSTAINABILITY AND SOCIAL RESPONSIBILITY. WE RECOGNIZE OUR PIVOTAL ROLE
                                IN
                                SUPPORTING THE GROWTH AND DEVELOPMENT OF OUR COUNTRY, AND OUR VITAL ROLE IN PEOPLE'S SAFETY,
                                SECURITY AND ENHANCING THEIR PRODUCTIVITY AND DAILY LIVES
                            </h4>
                        </div>
                    </div>

                    <div class="col">
                        <div class="image-container">
                            <div data-aos="fade-right" data-aos-duration="3000" data-aos-offset="0">
                                <img src="{{ asset('css/imgs/y1.png') }}" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add spacing between rows -->
                <div class="row ">
                    <div class="col">
                        <!-- title start -->
                        <div class="text" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="0">
                            <h2>MISSION</h2>
                            <!-- title end -->
                            <h4 >
                                OUR MISSION AT METERIKA IS TO STREAMLINE THE CONSTRUCTION PROCESS FOR OUR CLIENTS,
                                THROUGHOUT
                                EACH PROJECT, WE PROVIDE COMPREHENSIVE FOLLOW-UP CONSULTATIONS AT EVERY STAGE, ENSURING
                                CLIENTS
                                AND PARTNERS TO GUARANTEE A SEAMLESS OPERATION, FUNCTIONAL SPACE WITH A TOP-NOTCH QUALITY
                                THAT
                                EXCEEDS EXPECTATIONS.
                            </h4>
                        </div>
                    </div>

                    <div class="col">
                        <div class="image-container">
                            <div data-aos="fade-right" data-aos-duration="5000" data-aos-offset="0">
                                <img src="{{ asset('css/imgs/y2.png') }}" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add spacing between rows -->
                <div class="row ">
                    <div class="col">
                        <!-- title start -->
                        <div class="text2" data-aos="fade-left" data-aos-duration="5000" data-aos-offset="0">
                            <h2>VISION</h2>
                            <!-- title end -->
                            <h4 >
                                AT THE CORE OF METERIKA LIES A BOLD VISION, TO REVOLUTIONIZE THE BOUNDARIES OF THE
                                CONSTRUCTION
                                INDUSTRY AND EMERGE AS A LEADING TECHNOLOGY-DRIVEN COMPANY. THIS ASPIRATION IS BUILT UPON
                                OUR
                                FIRM BELIEF THAT THE HARMONIOUS INTEGRATION OF DESIGN, CONSTRUCTION, AND TECHNICAL EXPERTISE
                                IS
                                THE KEY TO DELIVERING UNPARALLELED RESULTS.
                            </h4>
                        </div>
                    </div>

                    <div class="col">
                        <div class="image-container">
                            <div data-aos="fade-right" data-aos-duration="5000" data-aos-offset="0">
                                <img src="{{ asset('css/imgs/y3.png') }}" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* Add custom spacing between rows */
        .section-wrapper>.row {
            margin-bottom: 50px;
        }
    </style>
@endsection

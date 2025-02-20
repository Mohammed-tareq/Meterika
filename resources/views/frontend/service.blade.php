@extends('frontend.inc.header')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}" />
@endpush
{{-- sec1 --}}
@section('sec1')
    @if ($video)
        <div>
            <video controls autoplay class="d-block w-100" src="{{ $video->video }}" alt="..."></video>
        </div>
    @endif
@endsection
{{-- sec2 --}}
@section('sec2')
    @if ($secone)
        <section id="electrical">
            <div class="container text-center">
                <div class="row">
                    <h2 class="mt-3">ELECTRICAL SERVICES</h2>

                    <div class="col-4">
                        <!-- title start -->
                        <div class="text p-lg-4 p-md-3" data-aos="fade-down" data-aos-duration="3000"
                            data-aos-anchor-placement="bottom-bottom">
                            <h3>{{ $secone->title_1 }}</h3>
                            <!-- title end -->

                            <h4>
                                @if ($secone->txt_1)
                                    {{ $secone->txt_1 }}<br />
                                @endif
                                @if ($secone->txt_2)
                                    {{ $secone->txt_2 }}<br />
                                @endif
                                @if ($secone->txt_3)
                                    {{ $secone->txt_3 }}<br />
                                @endif
                                @if ($secone->txt_4)
                                    {{ $secone->txt_4 }}<br />
                                @endif
                                @if ($secone->txt_5)
                                    {{ $secone->txt_5 }}<br />
                                @endif
                                @if ($secone->txt_6)
                                    {{ $secone->txt_6 }}<br />
                                @endif
                                @if ($secone->txt_7)
                                    {{ $secone->txt_7 }}<br />
                                @endif
                                @if ($secone->txt_8)
                                    {{ $secone->txt_8 }}<br />
                                @endif
                                @if ($secone->txt_9)
                                    {{ $secone->txt_9 }}<br />
                                @endif
                                @if ($secone->txt_10)
                                    {{ $secone->txt_10 }}<br />
                                @endif
                                @if ($secone->txt_11)
                                    {{ $secone->txt_11 }}<br />
                                @endif
                                @if ($secone->txt_12)
                                    {{ $secone->txt_12 }}<br />
                                @endif
                            </h4>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="image-container">
                            <div data-aos="fade-down" data-aos-duration="2000" data-aos-offset="0">
                                <img src="{{ $secone->img }}" alt="Image" />
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="text2  p-lg-4 p-md-3" data-aos="fade-up" data-aos-duration="3000"
                            data-aos-anchor-placement="bottom-bottom">
                            <h3>{{ $secone->title_2 }}</h3>
                            <!-- title end -->
                            <h4>
                                @if ($secone->txt2_1)
                                    {{ $secone->txt2_1 }}<br />
                                @endif
                                @if ($secone->txt2_2)
                                    {{ $secone->txt2_2 }}<br />
                                @endif
                                @if ($secone->txt2_3)
                                    {{ $secone->txt2_3 }}<br />
                                @endif
                                @if ($secone->txt2_4)
                                    {{ $secone->txt2_4 }}<br />
                                @endif
                                @if ($secone->txt2_5)
                                    {{ $secone->txt2_5 }}<br />
                                @endif
                                @if ($secone->txt2_6)
                                    {{ $secone->txt2_6 }}<br />
                                @endif
                                @if ($secone->txt2_7)
                                    {{ $secone->txt2_7 }}<br />
                                @endif
                                @if ($secone->txt2_8)
                                    {{ $secone->txt2_8 }}
                                @endif
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection
{{-- sec3 --}}
@section('sec3')
    @if ($sectwo)
        <section id="havc">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <!-- title start -->
                        <div class="text" data-aos="fade-right" data-aos-duration="3000"
                            data-aos-anchor-placement="bottom-bottom">
                            <h2>{{ $sectwo->title_1 }}</h2>
                            <!-- title end -->

                            <h4>
                                @if ($sectwo->txt_1)
                                    {{ $sectwo->txt_1 }}<br />
                                @endif
                                @if ($sectwo->txt_2)
                                    {{ $sectwo->txt_2 }}<br />
                                @endif
                                @if ($sectwo->txt_3)
                                    {{ $sectwo->txt_3 }}<br />
                                @endif
                                @if ($sectwo->txt_4)
                                    {{ $sectwo->txt_4 }}<br />
                                @endif
                                @if ($sectwo->txt_5)
                                    {{ $sectwo->txt_5 }}<br />
                                @endif
                                @if ($sectwo->txt_6)
                                    {{ $sectwo->txt_6 }}
                                @endif
                            </h4>

                            <h2 class="hvac2">{{ $sectwo->title_2 }}</h2>
                            <!-- title end -->

                            <h4>
                                {{ $sectwo->txt2_1 }}<br />
                                {{ $sectwo->txt2_2 }}<br />
                                {{ $sectwo->txt2_3 }}
                            </h4>
                        </div>
                    </div>

                    <div class="col">
                        <div class="image">
                            <div data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                                <img src="{{ $sectwo->img }}" alt="Image" style="width: 70%" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
{{-- sec4 --}}
@section('sec4')
    @if ($secthree)
        <section id="plumbing">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <!-- title start -->
                        <div class="text" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="0">
                            <h2 class="text-right">{{ $secthree->title_1 }}</h2>
                            <!-- title end -->

                            <h4 class="text-right">
                                @if ($secthree->txt_1)
                                    {{ $secthree->txt_1 }}<br />
                                @endif
                                @if ($secthree->txt_2)
                                    {{ $secthree->txt_2 }}<br />
                                @endif
                                @if ($secthree->txt_3)
                                    {{ $secthree->txt_3 }}<br />
                                @endif
                                @if ($secthree->txt_4)
                                    {{ $secthree->txt_4 }}<br />
                                @endif

                            </h4>
                        </div>
                    </div>

                    <div class="col">
                        <div class="image-container">
                            <div data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                                <img src="{{ $secthree->img_1 }}" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="image-container">
                            <div data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0">
                                <img src="{{ $secthree->img_2 }}" alt="Image" />
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <!-- title start -->
                        <div class="text" data-aos="fade-right" data-aos-duration="3000" data-aos-offset="0">
                            <h2 class="text-right">{{ $secthree->title_2 }}</h2>
                            <!-- title end -->

                            <h4 class="text-right">
                                @if ($secthree->txt2_1)
                                    {{ $secthree->txt2_1 }}<br />
                                @endif
                                @if ($secthree->txt2_2)
                                    {{ $secthree->txt2_2 }}<br />
                                @endif
                                @if ($secthree->txt2_3)
                                    {{ $secthree->txt2_3 }}<br />
                                @endif
                                @if ($secthree->txt2_4)
                                    {{ $secthree->txt2_4 }}<br />
                                @endif
                                @if ($secthree->txt2_5)
                                    {{ $secthree->txt2_5 }}<br />
                                @endif
                                @if ($secthree->txt2_6)
                                    {{ $secthree->txt2_6 }}<br />
                                @endif
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
{{-- sec5 --}}
@section('sec5')
    @if ($secfour)
        <section id="havc" class="automation">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <!-- title start -->
                        <div class="text" data-aos="fade-right" data-aos-duration="3000"
                            data-aos-anchor-placement="bottom-bottom">
                            <br />
                            <h2>{{ $secfour->title_1 }}</h2>
                            <!-- title end -->

                            <h4 class="w-75">
                                @if ($secfour->txt_1)
                                    {{ $secfour->txt_1 }}<br />
                                @endif
                                @if ($secfour->txt_2)
                                    {{ $secfour->txt_2 }}<br />
                                @endif
                                @if ($secfour->txt_3)
                                    {{ $secfour->txt_3 }}<br />
                                @endif
                                @if ($secfour->txt_4)
                                    {{ $secfour->txt_4 }}<br />
                                @endif
                                @if ($secfour->txt_5)
                                    {{ $secfour->txt_5 }}<br />
                                @endif
                                @if ($secfour->txt_6)
                                    {{ $secfour->txt_6 }}<br />
                                @endif
                                @if ($secfour->txt_7)
                                    {{ $secfour->txt_7 }}<br />
                                @endif
                                @if ($secfour->txt_8)
                                    {{ $secfour->txt_8 }}<br />
                                @endif
                                @if ($secfour->txt_9)
                                    {{ $secfour->txt_9 }}<br />
                                @endif
                                @if ($secfour->txt_10)
                                    {{ $secfour->txt_10 }}<br />
                                @endif
                            </h4>
                        </div>
                    </div>

                    <div class="col">
                        <div class="image-container">

                            <img src="{{ $secfour->img_1 }}" alt="Image" />

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

@push('js')
    <script src="{{ asset('js/services.js') }}"></script>
@endpush

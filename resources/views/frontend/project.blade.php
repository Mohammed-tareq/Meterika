@extends('frontend.inc.header')

@push('css')
<link rel="stylesheet" href="{{ asset('css/project.css') }}" />

@endpush
{{-- sec1 --}}
@section('sec1')
    <section id="animation">
        <div class="custom-container">
            <img class="d-block w-100" src="{{asset('css/imgs/project_hero.png')}}" alt="Project Image" />
            <div class="custom-text" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="0">
                <h3 style="">
                    TO POWER <br />
                    YOUR <span>SPACE</span>
                </h3>
            </div>
        </div>
    </section>
@endsection
{{-- sec2 --}}


@section('sec2')
    <section id="project">
        @foreach ($projects as $project)
            @php
                $images = json_decode($project->images, true); // Decode JSON into an array
                $firstImage = $images[0] ?? null; // Get the first image or set null if empty
            @endphp

            <a href="{{ route('projectById', $project->id) }}">
                <div class="container text-center mb-5 mt-3">
                    <div class="row">
                        <div class="col">
                            <!-- title start -->
                            <div class="text" data-aos="fade-left" data-aos-duration="3000" data-aos-offset="0">
                                <h2 class="">{{ $project->name }}</h2>
                                <!-- title end -->
                            </div>
                        </div>

                        <div class="col">
                            <div class="image-container">
                                <div class="" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="0">
                                    @if ($firstImage)
                                        <img class="" src="{{ asset( $firstImage) }}" alt="Project Image">
                                    @else
                                        <p>No image available.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </section>
@endsection



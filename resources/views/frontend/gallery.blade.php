@extends('frontend.inc.header')
@push('css')
<link rel="stylesheet" href="{{ asset('css/gallery.css') }}" />
@endpush
@section('sec1')
    <section id="two">
        <p class="heading">METERIKA GALLERY</p>
        <div class="row">
                <div class="gallery-image">
                    @foreach ($galleries as $gallery)
                        <div class="img-box">
                            <img src="{{ $gallery->img }}" alt="1" />
                        </div>
                    @endforeach
                </div>

        </div>

        <!-- نافذة منبثقة تظهر عند الضغط على الصورة -->
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modalImage" />
            <div id="caption"></div>
        </div>
    </section>
@endsection

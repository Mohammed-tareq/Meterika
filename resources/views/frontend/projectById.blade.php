 @extends('frontend.inc.header')
 @push('css')
     <link rel="stylesheet" href="{{ asset('css/project-administrative.css') }}">
 @endpush


 @section('sec1')
     <section id="projects-inside">
         <div class="custom-container">
             <div class="custom-text" data-aos="fade-up" data-aos-duration="3000" data-aos-offset="0">
                 <h2>
                     TO POWER <br />
                     YOUR <span>SPACE</span>
                 </h2>
             </div>
         </div>

         <div class="slider-container">
             <div class="text" data-aos="fade-down" data-aos-duration="3000" data-aos-offset="0">
                 <h3 class="">{{ $project->title }}</h3> <!-- Dynamic Project Title -->
             </div>



             <div class="swiper mySwiper">
                 <div class="swiper-wrapper">
                     @if (!empty($images) && is_array($images) && count($images) > 1)
                         @foreach (array_slice($images, 1) as $image)
                             <div class="swiper-slide">
                                 <img src="{{ asset($image) }}" alt="Project Image">
                             </div>
                         @endforeach
                     @else
                         <p>No images available.</p>
                     @endif
                 </div>
             </div>


             <!-- Navigation Controls -->
             <div class="controls">
                 <div class="swiper-button-prev">
                     <i class="fa-solid fa-arrow-left icon-button"></i>
                 </div>
                 <!-- سهم اليسار -->

                 <div class="swiper-pagination"></div>
                 <!-- النقاط -->

                 <div class="swiper-button-next">
                     <i class="fa-solid fa-arrow-right icon-button"></i>
                 </div>
                 <!-- سهم اليمين -->
             </div>
         </div>
         <div id="fullscreen-overlay">
             <img id="fullscreen-img" src="" alt="Fullscreen Image" />
         </div>






     </section>

 @endsection


@push('js')
<script src="{{ asset('js/project-administrative.js ') }}"></script>

@endpush




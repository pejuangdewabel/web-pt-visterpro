@extends('layouts.public.app')

@push('addon-style')
  <link rel="stylesheet" href="{{ asset('assets/vendor/xzoom/dist/xzoom.min.css') }}">
  <style type="text/css">    
  </style>
@endpush
@section('content')
    <br>
    <br>
    <br>
    <main id="main">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
              <h2>Tentang</h2>
              <h2><strong>PT GRAHA VISTER MANDIRI</strong></h2>              
            </div>
        </div>
    </main>
    <section id="about" class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
              {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> --}}
              {{-- <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
              </ul> --}}
              <p>
                {!! $data->deskripsi !!}
              </p>
  
            </div>         
            {{-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="{{ Storage::url($data->foto) }}" class="img-fluid" alt="">
            </div>                --}}
          </div>
        </div>
    </section>    
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container">
        <div class="section-title">
          <h2></h2>
          <p>Sertifikat Legalitas</p>
        </div>
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="{{ asset('assets/img/events-1.jpg') }}" alt="..." class="xzoom" xoriginal="{{ asset('assets/img/events-1.jpg') }}">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Introduction to webdesign</a></h5>
                <p class="font-italic text-center">Sunday, September 26th at 7:00 pm</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
              </div>
            </div>
          </div>          
        </div>

      </div>
    </section><!-- End Events Section -->
@endsection
@push('before-script')
    <script src="{{ asset('assets/vendor/xzoom/dist/xzoom.min.js') }}"></script>
    {{-- <script>
      $(document).ready(function(){
        $('.xzoom').xzoom({
          zoomWidth:500,
          title:false,
          tint:'#333',
          xoffset:15
        });
      });
    </script> --}}
@endpush
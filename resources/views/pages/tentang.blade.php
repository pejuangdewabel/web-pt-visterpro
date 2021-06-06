@extends('layouts.public.app')

@section('content')
    <br>
    <br>
    <br>
    <main id="main mt-5">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
              <h2>Tentang</h2>
              <h2><strong>PT GRAHA VISTER MANDIRI</strong></h2>              
            </div>
        </div>
    </main>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
              <img src="{{ Storage::url($data->foto) }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
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
          </div>
        </div>
    </section>
@endsection
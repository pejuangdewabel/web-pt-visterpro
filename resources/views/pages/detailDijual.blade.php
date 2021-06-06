@extends('layouts.public.app')

@section('meta')
    <meta property="og:title" content="{{ $detail->nama_properti }}" />
    <meta property="og:image" content="https://visterpro.com/storage/{{ $detail->foto }}" />    
@endsection

@section('addon-style')    
    <script src="https://kit.fontawesome.com/184f699981.js" crossorigin="anonymous"></script>
@endsection

@section('content')
    <br>
    <br>
    <br>     
    <main id="main mt-5">
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
              <h2>{{ $detail->nama_properti	 }}</h2>
              <h4><strong>{{ $detail->lokasi }},
                @if ($detail->kabkot == '1')
                  Bandar Lampung
                @elseif($detail->kabkot == '2')
                  Lampung Selatan
                @else
                  Pesawaran
                @endif
              </strong></h4>
            </div>
        </div>
    </main>  
    <div class="container mt-3 text-center">
        <a 
          href="https://api.whatsapp.com/send?phone=628117240024&text=Halo,%20saya%20berminat%20dengan%20{{ $detail->nama_properti }}%20?"  
          target="_blank"
          class="btn btn-danger"
        >        
            <strong>PESAN SEKARANG JUGA</strong>
        </a>        
        <br>        
    </div>      
    <hr>
     <div class="container text-center mt-3">
      <div class="row">
        <div class="col-md-12 text-center">
          <a 
              class="btn btn-primary btn-sm"
              href="http://www.facebook.com/sharer.php?u=https://visterpro.com/dijual/{{ $detail->slug }}" 
              target="_blank"
          >
            Share to Facebook
          </a>                    
          @php
            $data = urlencode($detail->nama_properti);
            if ($detail->kabkot == '1')
              $lokasi = "Bandar Lampung";
            elseif($detail->kabkot == '2')
              $lokasi = "Lampung Selatan";
            else
              $lokasi = "Pesawaran";
          @endphp
          <a 
              class="btn btn-success btn-sm"
              href="https://web.whatsapp.com/send?text={{ $data }},%20Ukuran%20:%20{{ urlencode($detail->ukuran) }},%20Lokasi%20:%20{{ urlencode($lokasi) }}%0ACek%20di%20https://visterpro.com/dijual/{{ $detail->slug }}/" 
              target="_blank"
          >Share to Whatapp</a>
        </div>
      </div>      
    </div>  

    <section id="course-details" class="course-details">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ Storage::url($detail->foto) }}" class="img-fluid" alt="">                    
                </div>                
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Ukuran Tanah</h5>
                        <p><a href="#">{{ $detail->ukuran }}</a></p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Harga Cash</h5>
                        <p>
                          @if ($detail->harga_cash == 0)
                              Sesuai dengan Ukuran
                          @else
                              Rp. {{ number_format($detail->harga_cash) }}
                          @endif                       
                        </p> 
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Harga DP</h5>
                        <p>
                          @if ($detail->harga_dp == 0)
                              Sesuai dengan Ukuran
                          @else
                              Rp. {{ number_format($detail->harga_dp) }}
                          @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Harga Per Meter</h5>
                        <p>Rp. {{ number_format($detail->harga_permeter	) }}</p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Jenis Property</h5>
                        <p>
                          @if ($detail->status1 == '1')
                              Tanah
                          @else
                              Bangunan
                          @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 mt-3">
                    <div class="course-info d-flex justify-content-between align-items-center">
                        <h5>Status Property</h5>
                        <p>
                          @if ($detail->status2 == '1')
                              Dijual
                          @else
                              Disewakan
                          @endif
                        </p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h3>Deskripsi</h3>
                    <p>
                        {!! $detail->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="cource-details-tabs" class="cource-details-tabs">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Lokasi Strategis Dekat Dengan :</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Syarat </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Lokasi Strategis</h3>                    
                    <p>
                        {!! $detail->dekat !!}
                    </p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-12 details order-2 order-lg-1">
                    <h3>Syarat </h3>                    
                    <p>
                      {!! $detail->syarat !!}
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="container mb-3">
        <a 
          href="https://api.whatsapp.com/send?phone=628117240024&text=Halo,%20saya%20berminat%20dengan%20{{ $detail->nama_properti }}%20?"
          target="_blank"
          class="btn btn-primary">
            <strong>PESAN SEKARANG JUGA</strong>
        </a>
    </div>
    <div class="row">
            <div class="col-md-12 text-center mt-3 mb-3">
              <a href="{{ route('home') }}" class="btn btn-success">Kembali ke Home</a>
            </div>
          </div>
@endsection
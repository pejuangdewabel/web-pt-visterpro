@extends('layouts.public.app')

@push('addon-style')
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <style>
      lottie-player{
        margin: auto; 
      }  
      .sold-out-overlay {
        background: #e9033d;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        padding: 5px 10px;
        position: absolute;
        right: 40px;
        top: 10px;
      }
    </style>
@endpush

@section('content')
    <br>
    <br>
    <br>
    <main id="main mt-5">
        
    </main>
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <div class="row">
              @if ($wilayah)
                <div class="col-md-4 mb-2">
                  <button type="button" class="btn btn-info btn-sm">
                    Wilayah Property <br>
                    <strong>{{ $wilayah }}</strong>
                  </button>
                  <button type="button" class="btn btn-danger btn-sm">
                    Jenis Property <br>
                    <strong>{{ $jenis }}</strong>
                  </button>
                </div>
              @endif     
              <div class="col-md-3">                
                  <div class="form-group">
                    <select name="wilayah" id="" class="form-control" v-model="wilayah">
                      <option disabled value="">Pilih Lokasi Property</option>
                      <option value="semua">Semua Wilayah</option>
                      <option value="bandar-lampung">Bandar Lampung</option>
                      <option value="lampung-selatan">Lampung Selatan</option>
                      <option value="pesawaran">Pesawaran</option>
                    </select>
                  </div>                                  
              </div>     
              <div class="col-md-3">                
                  <div class="form-group">
                    <select name="jenis" id="" class="form-control" v-model="jenis">
                      <option disabled value="">Pilih Jenis Property</option>                      
                      <option value="semua">Semua</option>
                      <option value="tanah">Tanah</option>
                      <option value="bangunan">Bangunan / Rumah</option>
                    </select>
                  </div>                                  
              </div>              
              <div class="col-md-2" v-if="wilayah && jenis">                
                  <div class="form-group">
                    <a 
                      v-bind:href="'https://visterpro.com/cari-property/wilayah/' + wilayah + '/jenis/' + jenis"
                      class="btn btn-success" 
                    ><strong>Cari</strong></a>                   
                  </div>                                  
              </div>          
            </div>
          </div>
          <hr>
          <div class="row" data-aos="zoom-in" data-aos-delay="100">
            @forelse ($hasil as $j)
              <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-2">
                <div class="course-item">
                  @if ($j->statusSoldOut == "SOLD OUT")
                      <span class="sold-out-overlay">Sold Out</span>
                  @endif
                  <img src="{{ Storage::url($j->foto) }}" class="img-fluid" alt="...">
                  <div class="course-content">
                    <h3><strong>{{ $j->nama_properti }}</strong></h3>
                    <div class="d-flex justify-content-between align-items-center mb-3">                  
                      <div class="alert alert-info">
                        {{ $j->lokasi }}
                      </div>
                    </div>
                    <h6><strong>Ukuran / Type : {{ $j->ukuran }}</strong></h6> 
                    <br>
                    @if ($j->kabkot == '1')
                      <h6><strong>Wilayah : Bandar Lampung</strong></h5>                        
                    @elseif($j->kabkot == '2')
                      <h6><strong>Wilayah : Lampung Selatan</strong></h5>                        
                    @else
                      <h6><strong>Wilayah : Pesawaran</strong></h5>
                    @endif
                    <hr>
                    @if ($j->harga_dp != 0)
                      <h6><strong>Harga DP : Rp. {{ number_format($j->harga_dp) }}</strong></h6>
                    @endif              
                    <br>        
                    @if ($j->harga_cash != 0)
                      <h6><strong>Harga Cash : Rp. {{ number_format($j->harga_cash) }}</strong></h6>
                    @endif
                    @if ($j->harga_permeter != 0)
                      <h6><strong>Harga Permeter : Rp. {{ number_format($j->harga_permeter) }}</strong></h6>
                    @endif
                    <hr>                    
                    @if ($j->statusSoldOut == "SOLD OUT")
                      <a href="{{ route('detail-dijual', $j->slug) }}" class="btn btn-success mb-3 disabled">Detail</a>
                    @elseif($j->statusSoldOut == "READY")
                      <a href="{{ route('detail-dijual', $j->slug) }}" class="btn btn-success mb-3">Detail</a>                                          
                    @endif                    
                    {{-- <div class="trainer d-flex justify-content-between align-items-center">
                      <div class="trainer-profile d-flex align-items-center">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                        <span>Admin</span>
                      </div>
                      <div class="trainer-rank d-flex align-items-center">
                        <i class="bx bx-user"></i>&nbsp;date : 01-01-2021
                        &nbsp;&nbsp;
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
            @empty
              <div class="col-md-12">
                <h5 class="text-center"><strong>Maaf, Property Belum Tersedia Silahkan Mencari Property Yang Lain...</strong></h5>                
                <div class="row">
                  <div class="col-md-12 text-center">
                    <a href="{{ route('home') }}" class="btn btn-primary">Kembali ke Home</a>
                  </div>
                </div>
                <lottie-player                   
                  src="https://assets3.lottiefiles.com/private_files/lf30_3X1oGR.json" 
                  mode="bounce" 
                  background="transparent"  
                  speed="1"  
                  style="width: 400px; height: 400px;"  
                  loop  
                  autoplay
                ></lottie-player>
              </div>
              <div class="col-lg-12 text-center">  
                
                {{-- <img src="{{ url('image/not.svg') }}" alt="" class="img-fluid" style="height: 300px"> --}}
              </div>
            @endforelse  
          </div>
          {{-- {{ $hasil->links() }} --}}          
        </div>
      </section>
@endsection

@push('addon-script')
    <script src="{{ url('vue/vue.js') }}"></script>
    <script>
      var app = new Vue({
        el: '#popular-courses',
        data: {
          wilayah : "",
          jenis: "",                    
          cek: "",
        }
      });
    </script>
@endpush
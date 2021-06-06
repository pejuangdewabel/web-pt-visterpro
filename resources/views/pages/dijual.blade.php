@extends('layouts.public.app')

@push('addon-style')
  <style>
    .sold-out-overlay {
        background: #e9033d;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        padding: 5px 10px;
        position: absolute;
        right: 10px;
        top: 10px;
    }
  </style>
@endpush

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <main id="main mt-5">
        
    </main>
  <div class="" id="app">    
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">          
          <div class="section-title">
            <h2>Terbaru</h2>                        
            <p>Property Dijual</p>                                                                     
          </div>
          <div class="row">
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
                      v-bind:href="'http://127.0.0.1:8000/cari-property/wilayah/' + wilayah + '/jenis/' + jenis"
                      class="btn btn-success" 
                    ><strong>Cari Property</strong></a>                   
                  </div>                                  
            </div>
          </div>
          <hr>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            @forelse ($data as $d)
              <div class="col mb-5">
                  <div class="card h-100">
                    @if ($d->statusSoldOut == "SOLD OUT")
                        <span class="sold-out-overlay">Sold Out</span>
                    @endif
                    <img
                      src="{{ Storage::url($d->foto) }}"
                      class="card-img-top"
                      alt="..."
                    />
                    <div class="card-body">
                      <h5 class="card-title"><strong>{{ $d->nama_properti }}</strong></h5>
                      <p class="card-text">
                        <div class="alert alert-info">
                          {{ $d->lokasi }}
                        </div>
                        <br>
                        <span class="btn-info mb-3">Ukuran / Type : {{ $d->ukuran }}</span> 
                        <br>
                        @if ($d->kabkot == '1')
                          <span class="btn-success">Wilayah : Bandar Lampung</span>                        
                        @elseif($d->kabkot == '2')
                          <span class="btn-success">Wilayah : Lampung Selatan</span>                        
                        @else
                          <span class="btn-success">Wilayah : Pesawaran</span>                        
                        @endif
                        <hr>
                        @if ($d->harga_dp != 0)
                          <span class="btn-primary mb-3">Harga DP : Rp. {{ number_format($d->harga_dp) }}</span>
                        @endif              
                        <br>        
                        @if ($d->harga_cash != 0)
                          <span class="btn-warning">Harga Cash : Rp. {{ number_format($d->harga_cash) }}</span>
                        @endif
                        @if ($d->harga_permeter != 0)
                          <span class="btn-success">Harga Permeter : Rp. {{ number_format($d->harga_permeter) }}</span>
                        @endif
                      </p>                    
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">
                        @if ($d->statusSoldOut == "SOLD OUT")
                          <a href="{{ route('detail-dijual', $d->slug) }}" class="btn btn-primary mb-3 disabled">Detail</a>
                        @elseif($d->statusSoldOut == "READY")
                          <a href="{{ route('detail-dijual', $d->slug) }}" class="btn btn-primary mb-3">Detail</a>                                          
                        @endif
                      </small>
                    </div>
                  </div>
              </div>              
            @empty
                  
            @endforelse
          </div>
          {{ $data->links() }}          
        </div>
    </section>
  </div>  
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
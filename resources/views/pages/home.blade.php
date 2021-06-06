@extends('layouts.public.app')

@push('addon-style')
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
        right: 10px;
        top: 10px;
    }
  </style>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
@endpush

@section('content') 
<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    @foreach ($banner as $br)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->iteration }}"></li>    
    @endforeach        
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      {{-- <section id="hero" class="d-flex justify-content-center align-items-center">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
          <h1>PT GRAHA VISTER MANDIRI</h1>
          <h2><strong>Anda butuh property untuk wilayah Lampung?, Kami siap melayani ?</strong></h2>      
          <a 
            href="https://api.whatsapp.com/send?phone=628117240024&text=Halo,%20saya%20berminat%20dengan%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?" 
            target="_blank"
            class="btn-get-started btn btn-success text-white"><strong>Hubungi Kami</strong></a>
        </div>
      </section>     --}}
      <img src="{{ url('image/Banner_utama.jpg') }}" class="d-block w-100" alt="">
    </div>
    @foreach ($banner as $bnr)
      <div class="carousel-item">
        <img src="{{ Storage::url($bnr->imgBanner) }}" class="d-block w-100" alt="{{ $bnr->titleBanner }}">        
      </div>
    @endforeach      
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
{{--  --}}
  {{-- <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>PT GRAHA VISTER MANDIRI</h1>
      <h2><strong>Anda butuh property untuk wilayah Lampung?, Kami siap melayani ?</strong></h2>      
      <a 
        href="https://api.whatsapp.com/send?phone=628117240024&text=Halo,%20saya%20berminat%20dengan%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?" 
        target="_blank"
        class="btn-get-started btn btn-success text-white"><strong>Hubungi Kami</strong></a>
    </div>
  </section><!-- End Hero --> --}}
  <hr>
  <div class="container">
    <div class="row text-center">
      <div class="col">                     
        <a 
          href="https://api.whatsapp.com/send?phone=628117240024&text=Halo,%20saya%20berminat%20dengan%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?" 
          target="_blank"
          class="btn-get-started btn btn-primary text-white"><strong>Hubungi Kami</strong>
        </a>
      </div>
    </div>
  </div>
  <hr>
  <section id="features" class="features mt-1">      
      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-2">
            <h4>Ayo Cari Property sesuai dengan keinginan kamu sendiri ?</h4>
            <hr>
          </div>
          <div class="col-md-12">
            <form 
              action="" 
              method="post"
              enctype="multipart/form-data"
            >
              @csrf
              <div class="form-row">
                <div class="col-md-3 form-group text-center">
                  <select name="wilayah" id="" class="form-control" v-model="wilayah">
                    <option disabled value="">Pilih Wilayah</option>
                    <option value="semua">Semua Wilayah</option>
                    <option value="bandar-lampung">Bandar Lampung</option>
                    <option value="lampung-selatan">Lampung Selatan</option>
                    <option value="pesawaran">Pesawaran</option>
                  </select>
                </div>
                <div class="col-md-3 form-group text-center">
                  <select name="jenis" id="" class="form-control" v-model="jenis">                    
                    <option disabled value="">--Pilih Jenis Property--</option>
                    <option value="semua">Semua</option>
                    <option value="tanah">Tanah</option>
                    <option value="bangunan">Bangunan / Rumah</option>
                  </select>
                </div>
                {{-- <div class="col-md-3 form-group">
                  <button class="btn btn-success" type="submit">Cari Property</button>
                </div>                 --}}
                <div class="col-md-3 form-group" v-if="wilayah && jenis">                  
                  <a                     
                    v-bind:href="'http://127.0.0.1:8000/cari-property/wilayah/' + wilayah + '/jenis/' + jenis"
                    {{-- v-bind:href="'https://visterpro.com/cari-property/wilayah/' + wilayah + '/jenis/' + jenis" --}}                    
                    class="btn btn-success"                                                           
                  ><strong>Cari Sekarang</strong></a>                 
                </div>                
              </div>
            </form>
          </div>                    
        </div>

      </div>
  </section><!-- End Features Section -->

  <main id="main">
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-6 col-6 text-center">
            <span data-toggle="counter-up">{{ $countJual }}</span>
            <p>Properti Dijual</p>
          </div>

          <div class="col-lg-6 col-6 text-center">
            <span data-toggle="counter-up">{{ $countsewa }}</span>
            <p>Properti Disewakan</p>
          </div>
        </div>

      </div>
    </section>    

    <!-- ======= Popular Dijual Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Terbaru</h2>
          <p>Property Dijual</p>
        </div>        
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
          @forelse ($jual as $j)
            <div class="col">
                <div class="card h-100">
                   @if ($j->statusSoldOut == "SOLD OUT")
                      <span class="sold-out-overlay">Sold Out</span>
                  @endif
                  <img
                    src="{{ Storage::url($j->foto) }}"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body">
                    <h5 class="card-title"><strong>{{ $j->nama_properti }}</strong></h5>
                    <p class="card-text">
                      <div class="alert alert-info">
                        {{ $j->lokasi }}
                      </div>
                      <br>
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
                    </p>                    
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">
                      @if ($j->statusSoldOut == "SOLD OUT")
                        <a href="{{ route('detail-dijual', $j->slug) }}" class="btn btn-primary mb-3 disabled">Detail</a>
                      @elseif($j->statusSoldOut == "READY")
                        <a href="{{ route('detail-dijual', $j->slug) }}" class="btn btn-primary mb-3">Detail</a>                                          
                      @endif
                    </small>
                  </div>
                </div>
            </div>
          @empty
                
          @endforelse
        </div>        
        {{ $jual->links() }}
        {{-- <div class="row row-cols-1 row-cols-md-3 g-4 mb-3">
          <div class="col">
            <div class="card h-100">
              <img
                src="https://mdbootstrap.com/img/new/standard/city/044.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural lead-in to
                  additional content. This content is a little bit longer.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img
                src="https://mdbootstrap.com/img/new/standard/city/043.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This card has supporting text below as a natural lead-in to additional
                  content.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img
                src="https://mdbootstrap.com/img/new/standard/city/042.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural lead-in to
                  additional content. This card has even longer content than the first to show
                  that equal height action.
                </p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Popular Disewakan Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Terbaru</h2>
          <p>Property Disewakan</p>
        </div>        

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @forelse ($sewa as $s)
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                <img src="{{ Storage::url($s->foto) }}" class="img-fluid" alt="...">
                <div class="course-content">
                  <div class="d-flex justify-content-between align-items-center mb-3">                  
                    <div class="btn btn-primary"><strong>DP Rp. {{ number_format($s->harga_dp) }}</strong></div>
                  </div>                  
                  <h3>{{ $s->nama_properti }}</h3>
                  <p class="justify-center">
                    {!! $s->kata_thumb !!}
                  </p>
                  <a href="{{ route('detail-disewakan', $s->slug) }}" class="btn btn-success mb-3">Detail</a>
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
            <div class="col-md-12 mb-2">
              <h6 class="text-center"><strong>Maaf, Property Jenis Ini Belum Tersedia Silahkan Mencari Property Yang Lain...</strong></h6>
            </div>
            <div class="col-lg-12 text-center">              
              <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_rsT9V2.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
              {{-- <img src="{{ url('image/not.svg') }}" alt="" class="img-fluid" style="height: 300px"> --}}
            </div>            
          @endforelse          
          {{-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ url('image/p2.jpg') }}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">                  
                  <div class="btn btn-primary"><strong>DP Rp. 10.000.000</strong></div>
                </div>
                
                <h3>Kavling Vister Land</h3>
                <p class="justify-center">
                  Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                  Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                </p>
                <a href="course-details.html" class="btn btn-success mb-3">Detail</a>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Admin</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;date : 01-01-2021
                    &nbsp;&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ url('image/p3.jpg') }}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">                  
                  <div class="btn btn-primary"><strong>DP Rp. 10.000.000</strong></div>
                </div>
                
                <h3>Kavling Aqur 2</h3>
                <p class="justify-center">
                  Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                  Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.
                </p>
                <a href="course-details.html" class="btn btn-success mb-3">Detail</a>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Admin</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;date : 01-01-2021
                    &nbsp;&nbsp;
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>

      </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tim Marketing</h2>
          <p>PT GRAHA VISTER MANDIRI</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ url('image/agen.jpg') }}" class="img-fluid" alt="" style="height: 250px">
              <div class="member-content">
                <h4>Nur Sholeh</h4>
                <span>Marketing Agency</span>
                <p>
                  Marketing kami akan melayani anda dengan ramah dan senyuman.
                </p>
                <div class="social">                  
                  <a  
                      href="https://api.whatsapp.com/send?phone=6285783440970&text=Halo,%20saya%20berminat%20dengan%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?"
                      target="_blank"
                      class="btn btn-info text-white"><i class="icofont-brand-whatsapp"></i> Hubungi Agen</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ url('image/rangga.jpg') }}" class="img-fluid" alt="" style="height: 250px">
              <div class="member-content">
                <h4>M Rangga Dwi Putra</h4>
                <span>Marketing Agency</span>
                <p>
                  Marketing kami akan melayani anda dengan ramah dan senyuman.
                </p>
                <div class="social">                  
                  <a  
                      href="https://api.whatsapp.com/send?phone=62895604103989&text=Halo,%20saya%20ingin%20berkonsultasi%20tentang%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?"
                      target="_blank"
                      class="btn btn-info text-white"><i class="icofont-brand-whatsapp"></i> Hubungi Agen</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ url('image/Tri.jpg') }}" class="img-fluid" alt="" style="height: 250px">
              <div class="member-content">
                <h4>Tri Emilia</h4>
                <span>Marketing Agency</span>
                <p>
                  Marketing kami akan melayani anda dengan ramah dan senyuman.
                </p>
                <div class="social">                  
                  <a
                    href="https://api.whatsapp.com/send?phone=6282279380472&text=Halo,%20saya%20ingin%20berkonsultasi%20tentang%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?"
                    target="_blank"
                    class="btn btn-info text-white">
                    <i class="icofont-brand-whatsapp"></i> Hubungi Agen
                  </a>
                </div>
              </div>
            </div>
          </div>
          
           <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ url('image/bella.jpg') }}" class="img-fluid" alt="" style="height: 250px">
              <div class="member-content">
                <h4>Prasetyo Bella R</h4>
                <span>Marketing Agency</span>
                <p>
                  Marketing kami akan melayani anda dengan ramah dan senyuman.
                </p>
                <!--<h6 class="text-primary"><strong>Front-End Developer</strong></h6>-->
                <!--<p class="text-dark">-->
                <!--  Best skills : <br>Vue JS, RESTAPI, Laravel-->
                <!--</p>-->
                <div class="social">                  
                  <a  
                      href="https://api.whatsapp.com/send?phone=6281541212011&text=Halo,%20saya%20ingin%20berkonsultasi%20tentang%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?"
                      target="_blank"
                      class="btn btn-info text-white"><i class="icofont-brand-whatsapp"></i> Hubungi Agen</a>
                </div>
              </div>
            </div>
          </div>
          
          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch">-->
          <!--  <div class="member">-->
          <!--    <img src="{{ url('image/Ivan.jpg') }}" class="img-fluid" alt="" style="height: 250px">-->
          <!--    <div class="member-content">-->
          <!--      <h4>Ispan Alfadqi</h4>-->
          <!--      <span>Marketing Agency</span>-->
          <!--      <p>-->
          <!--        Marketing kami akan melayani anda dengan ramah dan senyuman.-->
          <!--      </p>-->
          <!--      <div class="social">                  -->
          <!--        <a  -->
          <!--            href="https://api.whatsapp.com/send?phone=6288276713327&text=Halo,%20saya%20ingin%20berkonsultasi%20tentang%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?"-->
          <!--            target="_blank"-->
          <!--            class="btn btn-info text-white"><i class="icofont-brand-whatsapp"></i> Hubungi Agen</a>-->
          <!--      </div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ url('image/Okta.jpg') }}" class="img-fluid" alt="" style="height: 250px">
              <div class="member-content">
                <h4>Oktavia Laraswati</h4>
                <span>Marketing Agency</span>
                <p>
                  Marketing kami akan melayani anda dengan ramah dan senyuman.
                </p>
                <div class="social">                  
                  <a  
                      href="https://api.whatsapp.com/send?phone=6282280191948&text=Halo,%20saya%20ingin%20berkonsultasi%20tentang%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?"
                      target="_blank"
                      class="btn btn-info text-white"><i class="icofont-brand-whatsapp"></i> Hubungi Agen</a>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ url('image/Rico.jpg') }}" class="img-fluid" alt="" style="height: 250px">
              <div class="member-content">
                <h4>Ricko</h4>
                <span>Marketing Agency</span>
                <p>
                  Marketing kami akan melayani anda dengan ramah dan senyuman.
                </p>
                <div class="social">                  
                  <a  
                      href="https://api.whatsapp.com/send?phone=6281272170885&text=Halo,%20saya%20ingin%20berkonsultasi%20tentang%20property%20yang%20ditawarkan%20oleh%20PT%20Graha%20Vister%20Mandiri%20?"
                      target="_blank"
                      class="btn btn-info text-white"><i class="icofont-brand-whatsapp"></i> Hubungi Agen</a>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
@endsection

@push('addon-script')
    <script src="{{ url('vue/vue.js') }}"></script>
    <script>
      var app = new Vue({
        el: '#features',
        data: {
          wilayah : "",
          jenis: "",                    
          cek: "",
        }
      });
    </script>
@endpush
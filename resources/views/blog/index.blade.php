<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <meta content="PT Graha Vister Mandiri adalah sebuah perusahaan yang menyediakan jasa pembelian dan penjualan tanah kavling maupun rumah yang berada di kota Bandar Lampung, Lampung Selatan dan Pesawaran Provinsi Lampung" name="description">
    <meta content="jual tanah Lampung, jual rumah, jual tanah Bandar Lampung, property tanah dan rumah, PT Graha Vister Mandiri" name="keywords">
    <meta content="artikel tanah, artikel properti, artikel perumahan murah, PT Graha Vister Mandiri" name="keywords">    
    
    <meta name="author" content="PT Graha Vister Mandiri">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <meta name="google-site-verification" content="Og2a2ecx20SXkoMJWZXQn4w505EDrUw_AYEVQGy0I3o" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VTHFCFZ2WB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-VTHFCFZ2WB');
    </script>


    <title>Artikel Vister Pro</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('image/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('image/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('blog/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('blog/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('blog/assets/css/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ url('blog/assets/css/owl.css') }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet"> 
    <style>
      .head h1{
        font-family: 'Poppins', sans-serif;        
        font-weight: 600;
        color: royalblue;
      }
      .head h6{
        font-family: 'Poppins', sans-serif;        
        font-weight: 300;
        color: orangered;
      }
    </style>
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ url('image/logo.png') }}">
                <img src="{{ url('image/logo.png') }}" alt="">
            </a>                      
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('artikel') }}">Artikel
                    <span class="sr-only">(current)</span>
                    </a>
                </li>                 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Kembali</a>
                </li>
                </ul>
            </div>
        </div>
      </nav>
    </header>
    
    <br>  
    <hr>  
    <hr>  
    <hr>
    <hr>
        <div class="container-fluid text-center head">
          <div class="row">
            <div class="col-md-12">
              <h1>Artikel Property</h1>
              <h6>PT Graha Vister Mandiri</h6>
            </div>
          </div>
        </div>
    <hr>
        <section class="blog-posts grid-system">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="all-blog-posts">
                  <div class="row">
                    @foreach ($artikel as $a)
                      <a href="{{ route('artikel-detail',$a->slug) }}">
                        <div class="col-lg-4">
                          <div class="blog-post">
                            <div class="blog-thumb">
                              <img src="{{ Storage::url($a->imgblog) }}" alt="">
                            </div>
                            <div class="down-content">
                                <h4>{{ $a->title }}</h4>                                            
                                <ul class="post-info">
                                  <li><a href="#">Admin</a></li>
                                  <li><a href="#">{{ Carbon\Carbon::parse($a->created_at)->format('d F Y') }}</a></li>                              
                                </ul>                            
                            </div>
                          </div>
                        </div>
                      </a> 
                    @endforeach                               
                    {{-- <div class="col-lg-12">
                      <ul class="page-numbers">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                      </ul>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="https://www.facebook.com/ptgrahavistermandiri/">Facebook</a></li>
              <li><a href="https://www.instagram.com/ptgraha_vistermandiri/">Instagram</a></li>
              <li><a href="https://www.youtube.com/channel/UCPh4Pqnt1wHB_t6RlS5EdYw">Youtube</a></li>              
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>Copyright 2021</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('blog/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('blog/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Additional Scripts -->
    <script src="{{ url('blog/assets/js/custom.js') }}"></script>
    <script src="{{ url('blog/assets/js/owl.js') }}"></script>
    <script src="{{ url('blog/assets/js/slick.js') }}"></script>
    <script src="{{ url('blog/assets/js/isotope.js') }}"></script>
    <script src="{{ url('blog/assets/js/accordions.js') }}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
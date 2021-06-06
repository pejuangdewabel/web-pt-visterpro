<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <meta content="PT Graha Vister Mandiri adalah sebuah perusahaan yang menyediakan jasa pembelian dan penjualan tanah kavling maupun rumah yang berada di kota Bandar Lampung, Lampung Selatan dan Pesawaran Provinsi Lampung" name="description">
    <meta content="jual tanah Lampung, jual rumah, jual tanah Bandar Lampung, property tanah dan rumah, PT Graha Vister Mandiri" name="keywords">
    <meta content="artikel tanah, artikel properti, artikel perumahan murah, PT Graha Vister Mandiri" name="keywords">    
    <meta content="{{ $data['judul'] }}" name="keywords">    
    
    <meta property="og:title" content="{{ $data['judul'] }}" />
    <meta property="og:image" content="https://visterpro.com/storage/{{ $data['image-thub'] }}" />
    
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

    <!--{{-- <meta property="og:title" content="{{ $data['judul'] }}" />-->
    <!--<meta property="og:image" content="https://visterpro.com/storage/{{ $data['image-thub'] }}" /> --}}-->

    <title>{{ $data['judul'] }} | Artikel Vister Pro</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('image/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('image/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Bootstrap core CSS -->
    <link href="{{ url('blog/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('blog/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('blog/assets/css/templatemo-stand-blog.css') }}">
    <link rel="stylesheet" href="{{ url('blog/assets/css/owl.css') }}">
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
            <a class="navbar-brand" href="index.html">
                <img src="{{ url('image/logo.png') }}" alt="">
            </a>                      
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('artikel') }}">Artikel                    
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

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="heading-page header-text">
      <section class="blog-posts grid-system">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="all-blog-posts">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        <img src="{{ Storage::url($data['image-thub']) }}" alt="">
                      </div>
                      <div class="down-content">
                        {{-- <span>Lifestyle</span> --}}                        
                        <a href="#"><h4>{{ $data['judul'] }}</h4></a>
                        <ul class="post-info">
                          <li><a href="#">Admin</a></li>
                          <li><a href="#">{{ $data['tgl'] }}</a></li>
                          {{-- <li><a href="#">10 Comments</a></li> --}}
                        </ul>
                        <p>
                          {!! $data['dec'] !!}
                        </p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li>{{ $data['slug'] }}</li>                                
                              </ul>
                            </div>
                            <div class="col-6">
                              <ul class="post-share">
                                <li><i class="fa fa-share-alt"></i></li>
                                <li>
                                  <a 
                                    href="http://www.facebook.com/sharer.php?u=https://visterpro.com/artikel/{{ $data['slug'] }}" 
                                    target="_blank"
                                  >Facebook</a>,</li>
                                <li>
                                    <a 
                                        href="http://twitter.com?status=https://vister.com/artikel/{{$data['slug']}}"
                                        target="_blank"
                                        title="Bagikan ke Twitter"
                                    > 
                                        Twitter
                                    </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-lg-12">
                    <div class="sidebar-item comments">
                      <div class="sidebar-heading">
                        <h2>4 comments</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <li>
                            <div class="author-thumb">
                              <img src="assets/images/comment-author-01.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4>Charles Kate<span>May 16, 2020</span></h4>
                              <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                            </div>
                          </li>
                          <li class="replied">
                            <div class="author-thumb">
                              <img src="assets/images/comment-author-02.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4>Thirteen Man<span>May 20, 2020</span></h4>
                              <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                            </div>
                          </li>
                          <li>
                            <div class="author-thumb">
                              <img src="assets/images/comment-author-03.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                              <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                            </div>
                          </li>
                          <li class="replied">
                            <div class="author-thumb">
                              <img src="assets/images/comment-author-02.jpg" alt="">
                            </div>
                            <div class="right-content">
                              <h4>Thirteen Man<span>May 22, 2020</span></h4>
                              <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item submit-comment">
                      <div class="sidebar-heading">
                        <h2>Your comment</h2>
                      </div>
                      <div class="content">
                        <form id="comment" action="#" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your name" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" placeholder="Your email" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Submit</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sidebar">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="sidebar-item recent-posts">
                      <div class="sidebar-heading">
                        <h2>Postingan Terkait</h2>
                      </div>
                      <div class="content">
                        <ul>
                          @foreach ($recent as $r)
                              <li>
                                <a href="{{ $r->slug }}">
                                  <h5>{{ $r->title }}</h5>
                                  <span>{{ Carbon\Carbon::parse($r->created_at)->format('d F Y') }}</span>
                                </a>
                              </li>
                          @endforeach                          
                        </ul>
                      </div>
                    </div>
                  </div>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>  
    </div>
    
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

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <a href="{{ route('home') }}">
          <img src="{{ url('image/logo.png') }}" alt="">
        </a>
      </div>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block text-success">
        <ul>
          <li class="{{ (request()->is('/')) ? 'active' : '' }}">
            <a href="{{ route('home') }}">Home</a>
          </li>
          <li class="{{ (request()->is('tentang-pt-graha-vister-mandiri')) ? 'active' : '' }}">
            <a href="{{ route('about') }}">Tentang</a>
          </li>
          <li class="{{ (request()->is('artikel')) ? 'active' : '' }}">
            <a href="{{ route('artikel') }}">Artikel</a>
          </li>
          <li class="{{ (request()->is('dijual*')) ? 'active' : '' }}">
            <a 
              href="{{ route('dijual') }}"
              id="navbarJual"
            >Properti Dijual</a>
          </li>
          <li class="{{ (request()->is('disewakan*')) ? 'active' : '' }}">
            <a 
              href="{{ route('disewakan') }}"
              id="navbarDropdown"
            >Properti Disewakan</a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{ route('login') }}" class="get-started-btn bg-success">Login</a>

    </div>
</header><!-- End Header -->
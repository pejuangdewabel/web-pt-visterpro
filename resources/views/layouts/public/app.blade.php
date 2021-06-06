<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT GRAHA VISTER MANDIRI</title>
  <meta name="author" content="@yield('meta-name') | PT Graha Vister Mandiri">
  <meta content="PT Graha Vister Mandiri adalah sebuah perusahaan yang menyediakan jasa pembelian dan penjualan tanah kavling maupun rumah yang berada di kota Bandar Lampung, Lampung Selatan dan Pesawaran Provinsi Lampung" name="description">
  <meta content="jual tanah Lampung, jual rumah, jual tanah Bandar Lampung, property tanah dan rumah, PT Graha Vister Mandiri" name="keywords">    
  @yield('meta')  
  <meta name="google-site-verification" content="Og2a2ecx20SXkoMJWZXQn4w505EDrUw_AYEVQGy0I3o" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VTHFCFZ2WB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-VTHFCFZ2WB');
    </script>
  
  
  @include('includes.public.style')
  @stack('addon-style')

</head>

<body>

  @include('includes.public.header')

  @yield('content')

  @include('includes.public.footer')

  @include('includes.public.script')

  @stack('addon-script')
  @stack('before-script')
</body>

</html>
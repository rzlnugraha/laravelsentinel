<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf_token"content="{{ csrf_token() }}">
  
  <title>@yield('title','Laravel Sentinel')</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets') }}/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="{{ asset('assets') }}/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  
  {{-- DataTable --}}
  <link rel="stylesheet" href="{{ asset('assets') }}/vendors/datatables/datatables.min.css">

  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="{{ asset('sweetalert.css') }}">

  @stack('style')
</head>

<body>
  <div class="container-scroller">
    {{-- Ini Header --}}
    @include('layouts.header')

    <div class="container-fluid page-body-wrapper">
      {{-- Ini Navbar --}}
      @include('layouts.navbar')
      
      <div class="main-panel">
        
        {{-- Isi Konten --}}
        <div class="content-wrapper">
            <div class="row purchace-popup">
                @yield('content')
            </div>
        </div>
        
        {{-- Ini Footer --}}
        <footer class="footer">
            @include('layouts.footer')
        </footer>
        
      </div>
      {{-- Tutup Konten --}}
    </div>

  </div>

  <!-- plugins:js -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{ asset('assets') }}/vendors/js/vendor.bundle.base.js"></script>
  <script src="{{ asset('assets') }}/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  
  <!-- inject:js -->
  <script src="{{ asset('assets') }}/js/off-canvas.js"></script>
  <script src="{{ asset('assets') }}/js/misc.js"></script>
  <!-- endinject -->

  <!-- Custom js for this page-->
  <script src="{{ asset('assets') }}/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  
  {{-- Ajax buatan sendiri --}}
  <script src="{{ asset('js/ajax.js') }}"></script>
  
  {{-- Sweet Aleret --}}
  <script src="{{ asset('sweetalert.min.js') }}"></script>
  @include('sweet::alert')
  
  {{-- Buat script dari konten lain --}}
  @stack('script')
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
@include('templates.meta')
  <title>Sistem Presensi UMRAH</title>

  <!-- General CSS Files -->
@include('templates.style')
@stack('after-style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg" style="background-image: url({{url('background-head.png')}})"></div>
@include('templates.navbar')
@include('templates.sidebar')

      <!-- Main Content -->
      <div class="main-content">
@yield('content')
      </div>
     @include('templates.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
@stack('before-script')
@include('templates.script')
@stack('after-script')
</body>
</html>

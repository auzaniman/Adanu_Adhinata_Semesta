<!DOCTYPE html>
<html lang="en">
<head>
  @include('dashboard.components.meta')
  @include('dashboard.components.style')
  
  <title>@yield('title')</title>
  
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <main>

    @yield('content')

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('dashboard.components.script')
  @stack('script_multiple')
</body>
</html>
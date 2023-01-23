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
  @include('dashboard.components.header')
  @include('dashboard.components.sidebar')

  <main id="main" class="main">

    {{-- Alert --}}
    @if ($errors->any())
    <div class="alert alert-danger text-white z-index-0">
      <i class="bi bi-exclamation-octagon me-1"></i>
      <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li><strong>{{ $error }}</strong></li>
        @endforeach
      </ul>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show z-index-0" role="alert">
      <i class="bi bi-check-circle me-1"></i>
      <strong>{{ session('status') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        {{-- <span aria-hidden="true">&times;</span> --}}
      </button>
    </div>
    @endif
    {{-- End Alert --}}

    <div class="pagetitle">
      <h1>@yield('title')</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">@yield('title')</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    @yield('content')

  </main><!-- End #main -->

  @include('dashboard.components.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('dashboard.components.script')
  @stack('script_multiple')
</body>
</html>
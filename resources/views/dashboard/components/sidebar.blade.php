<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>Export Import</span>
          </a>
        </li>
        {{-- <li>
          <a href="">
            <i class="bi bi-circle"></i><span></span>
          </a>
        </li> --}}
      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Pelaporan Iklan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('form_pelaporan_ac')}}" class="@if (\Request::is('admin/form_pelaporan_ac*')) active @endif">
            <i class="bi bi-circle"></i><span>Akuisisi/LC</span>
          </a>
        </li>
        <li>
          <a href="{{ route('form_pelaporan_mp') }}">
            <i class="bi bi-circle"></i><span>MP</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->
    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#form-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Pengajuan Iklan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="form-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{route('form_pelaporan_ac')}}">
            <i class="bi bi-circle"></i><span>Akuisisi/LC</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>MP</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->
    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#finance-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-currency-dollar"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="finance-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>Jurnal</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>Audit Biaya Iklan</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Data Analyst</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>Sales</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>Statistik</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>Sales</span>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bi bi-circle"></i><span>Iklan</span>
          </a>
        </li>
      </ul>
    </li><!-- End Charts Nav --> --}}

    {{-- <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="icons-bootstrap.html">
            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
          </a>
        </li>
        <li>
          <a href="icons-remix.html">
            <i class="bi bi-circle"></i><span>Remix Icons</span>
          </a>
        </li>
        <li>
          <a href="icons-boxicons.html">
            <i class="bi bi-circle"></i><span>Boxicons</span>
          </a>
        </li>
      </ul>
    </li><!-- End Icons Nav --> --}}

    <li class="nav-heading">Halaman</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{ route('profile') }}">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="">
        <i class="bi bi-card-list"></i>
        <span>Registrasi Akun</span>
      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="">
        <i class="bi bi-envelope"></i>
        <span>Kontak</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

  </ul>

</aside>
<!-- End Sidebar-->
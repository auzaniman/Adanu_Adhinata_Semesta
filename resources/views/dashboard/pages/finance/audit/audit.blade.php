@extends('dashboard.layouts.app')
@section('title') Audit Iklan @endsection

@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Data Audit</h5>
            <div>
              <button class="btn btn-sm btn-primary">
                <i class="bi bi-table"></i>
                <a href="{{ route('data_dana_acc') }}" class="text-white">Data Dana ACC</a>
              </button>
              <button class="btn btn-sm btn-primary">
                <i class="bi bi-bar-chart-fill"></i>
                <a href="{{ route('statistik_iklan') }}" class="text-white">Statistik Iklan</a>
              </button>
              <button class="btn btn-sm btn-success">
                <i class="bi bi-printer-fill"></i>
                <a href="{{ route('cetak_pengajuan') }}" class="text-white">Cetak Pengajuan</a>
              </button>
            </div>
          </div>

          <!-- Bordered Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Akuisisi</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">MP</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">LC</button>
            </li>
          </ul>
          <div class="tab-content pt-2" id="borderedTabContent">
            <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
              <!-- Default Table -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tanggal/Jam</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $item)
                    @if ($item->tim == 'Akuisisi')
                      <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $item->nama_adv }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                          <button class="btn badge bg-info">
                            <i class="bi bi-pencil me-1 text-white"></i>
                            <a href="{{ route('show_audit_akuisisi', $item->id) }}" class="text-white">Audit</a>
                          </button>
                        </td>
                      </tr>
                    @else
                    @endif
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
            <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
              <!-- Default Table -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tanggal/Jam</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $item)
                    @if ($item->tim == 'MP')
                      <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $item->nama_adv }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                          <button class="btn badge bg-info">
                            <i class="bi bi-pencil me-1 text-white"></i>
                            <a href="{{ route('show_audit_akuisisi', $item->id) }}" class="text-white">Audit</a>
                          </button>
                        </td>
                      </tr>
                    @else
                    @endif
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
            <div class="tab-pane fade" id="bordered-contact" role="tabpanel" aria-labelledby="contact-tab">
              <!-- Default Table -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Tanggal/Jam</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($data as $item)
                    @if ($item->tim == 'LC')
                      <tr>
                        <th scope="row">{{ ++$i }}</th>
                        <td>{{ $item->nama_adv }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>
                          <button class="btn badge bg-info">
                            <i class="bi bi-pencil me-1 text-white"></i>
                            <a href="{{ route('show_audit_akuisisi', $item->id) }}" class="text-white">Audit</a>
                          </button>
                        </td>
                      </tr>
                    @else
                    @endif
                  @empty
                  @endforelse
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div><!-- End Bordered Tabs -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection

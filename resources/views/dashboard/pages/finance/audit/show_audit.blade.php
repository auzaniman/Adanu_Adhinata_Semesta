@extends('dashboard.layouts.app')
@section('title') Audit @endsection

@section('content')
<section class="section profile">
  <div class="row">
    <div class="col-xl-12">

      <div class="card">
        <div class="card-body pt-3">
          <div class="profile-overview">
            <div class="row">
              <div class="col-lg-3 col-md-4 label ">Nama Advertiser</div>
              <div class="col-lg-9 col-md-8">{{ $data->nama_adv }}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Team</div>
              <div class="col-lg-9 col-md-8">{{ $data->tim }}</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Pengajuan Dana</div>
              <div class="col-lg-9 col-md-8">@currency($data->jumlah_pengajuan)</div>
            </div>

            <div class="row">
              <div class="col-lg-3 col-md-4 label">Jam Pelaporan</div>
              <div class="col-lg-9 col-md-8">{{ $data->created_at }}</div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 label">Screenshot</div>
            </div>

            <div class="row">
              <div class="col-12">
                {{-- SS AKUN --}}
                <button type="submit" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                  SS Akun
                </button>
                {{-- Modal --}}
                <div class="modal fade" id="basicModal" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Toko</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="{{ asset('storage/'.$data->ss_akun) }}" class="card-img-top" id="imageGallery" alt="...">
                      </div>
                    </div>
                  </div>
                </div><!-- End Basic Modal-->

                {{-- SS SISA SALDO --}}
                <button type="submit" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal1">
                  SS Sisa Saldo
                </button>
                {{-- Modal --}}
                <div class="modal fade" id="basicModal1" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Tambah Toko</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="{{ asset('storage/'.$data->ss_sisa_saldo) }}" class="card-img-top" id="imageGallery" alt="...">
                      </div>
                    </div>
                  </div>
                </div><!-- End Basic Modal-->

                {{-- SS E-STATEMENT --}}
                <button type="submit" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal2">
                  SS E-Statement
                </button>
                {{-- Modal --}}
                <div class="modal fade" id="basicModal2" tabindex="-1">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">SS E-Statement</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="{{ asset('storage/'.$data->ss_e_statement) }}" class="card-img-top" id="imageGallery" alt="...">
                      </div>
                    </div>
                  </div>
                </div><!-- End Basic Modal-->
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Audit</h5>
            <form action="{{ route('post_audit_akuisisi') }}" class="row g-3" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="col-md-4" hidden>
                <label for="pengajuan_id" class="form-label">Pengajuan ID</label>
                <input type="text" name="pengajuan_id" class="form-control" id="inputName5" value="{{ $data->pia_id }}">
              </div>
              <div class="col-md-4" hidden>
                <label for="pelaporan_id" class="form-label">Pelaporan ID</label>
                <input type="text" name="pelaporan_id" class="form-control" id="inputName5" value="{{ $data->id }}">
              </div>
              <div class="col-md-4">
                <label for="pengeluaran_iklan" class="form-label">Pengeluaran Iklan</label>
                <input type="text" name="pengeluaran_iklan" class="form-control" id="inputName5">
              </div>
              <div class="col-md-4">
                <label for="pengeluaran_akun" class="form-label">Pengeluaran Akun</label>
                <input type="text" name="pengeluaran_akun" class="form-control" id="inputName5">
              </div>
              <div class="col-md-4">
                <label for="sisa_saldo" class="form-label">Sisa Saldo</label>
                <input type="text" name="sisa_saldo" class="form-control" id="inputName5">
              </div>
              <div class="col-md-6">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="inputName5" value="-">
              </div>
              <div class="col-md-6">
                <label for="dana_acc" class="form-label">Dana ACC</label>
                <input type="text" name="dana_acc" class="form-control" id="inputName5">
              </div>
              <div class="col-md-6" hidden>
                <label for="status" class="form-label">Verifikasi</label>
                <input type="text" name="status" class="form-control" id="inputName5" value="ACC">
              </div>
              <div class="">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal4">Verifikasi</button>
              </div>
              <div class="modal fade" id="basicModal4" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Memverifikasi Data Audit?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->
            </form><!-- End Multi Columns Form -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

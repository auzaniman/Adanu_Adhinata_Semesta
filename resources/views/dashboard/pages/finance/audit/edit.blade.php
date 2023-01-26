@extends('dashboard.layouts.app')
@section('title') Audit @endsection

@section('content')
<section class="section profile">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Audit</h5>
          <form action="{{ route('update_audit_akuisisi', $data->id) }}" class="row g-3" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="col-md-4" hidden>
              <label for="pengajuan_id" class="form-label">Pengajuan ID</label>
              <input type="text" name="pengajuan_id" class="form-control" id="inputName5" value="{{ $data->pengajuan_id }}">
            </div>
            <div class="col-md-4" hidden>
              <label for="pelaporan_id" class="form-label">Pelaporan ID</label>
              <input type="text" name="pelaporan_id" class="form-control" id="inputName5" value="{{ $data->pelaporan_id }}">
            </div>
            <div class="col-md-4">
              <label for="pengeluaran_iklan" class="form-label">Pengeluaran Iklan</label>
              <input type="text" name="pengeluaran_iklan" class="form-control" id="inputName5" value="{{ $data->pengeluaran_iklan }}">
            </div>
            <div class="col-md-4">
              <label for="pengeluaran_akun" class="form-label">Pengeluaran Akun</label>
              <input type="text" name="pengeluaran_akun" class="form-control" id="inputName5" value="{{ $data->pengeluaran_akun }}">
            </div>
            <div class="col-md-4">
              <label for="sisa_saldo" class="form-label">Sisa Saldo</label>
              <input type="text" name="sisa_saldo" class="form-control" id="inputName5" value="{{ $data->sisa_saldo }}">
            </div>
            <div class="col-md-6">
              <label for="keterangan" class="form-label">Keterangan</label>
              <input type="text" name="keterangan" class="form-control" id="inputName5" value="{{ $data->keterangan }}">
            </div>
            <div class="col-md-6">
              <label for="dana_acc" class="form-label">Dana ACC</label>
              <input type="text" name="dana_acc" class="form-control" id="inputName5" value="{{ $data->dana_acc }}">
            </div>
            <div class="col-md-6" hidden>
              <label for="status" class="form-label">Verifikasi</label>
              <input type="text" name="status" class="form-control" id="inputName5" value="{{ $data->status }}">
            </div>
            <div class="">
              <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#basicModal">Update</button>
            </div>
            <div class="modal fade" id="basicModal" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Mengubah Data Audit?</h5>
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

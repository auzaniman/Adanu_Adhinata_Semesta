@extends('dashboard.layouts.app')
@section('title') Form Pelaporan @endsection

@section('content')
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Laporan Biaya Iklan Akuisisi Pekanan</h5>

          <!-- Form Pelaporan Biaya Iklan Akuisisi & LC -->
          <form action="{{ route('post_pelaporan_ac') }}" class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4" hidden>
              <label for="user_id" class="form-label">User ID</label>
              <input type="text" name="user_id" class="form-control" id="inputName5" value="{{ Auth::user()->id }}">
            </div>
            <div class="col-md-6">
              <label for="nama_adv" class="form-label">Nama Adv</label>
              <input type="text" name="nama_adv" class="form-control" id="inputName5" value="{{ Auth::user()->name }}">
            </div>
            <div class="col-md-6">
              <label for="tim" class="form-label">Label</label>
              <select id="inputState" name="tim" class="form-select">
                <option selected>Pilih...</option>
                <option value="Akuisisi">Akuisisi</option>
                <option value="LC">LC</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="ss_akun" class="form-label">SS Akun</label>
              <input class="form-control" name="ss_akun" type="file" id="formFile">
            </div>
            <div class="col-md-4">
              <label for="ss_e_statement" class="form-label">SS Bank E-Statement</label>
              <input class="form-control" name="ss_e_statement" type="file" id="formFile">
            </div>
            <div class="col-md-4">
              <label for="ss_sisa_saldo" class="form-label">SS Sisa Saldo</label>
              <input class="form-control" name="ss_sisa_saldo" type="file" id="formFile">
            </div>
            <div class="">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection

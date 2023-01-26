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
          <form action="{{ route('post_pengajuan_ac') }}" class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-4" hidden>
              <label for="user_id" class="form-label">User ID</label>
              <input type="text" name="user_id" class="form-control" id="inputName5" value="{{ Auth::user()->id }}">
            </div>
            <div class="col-md-4" hidden>
              <label for="nama_adv" class="form-label">Nama Adv</label>
              <input type="text" name="nama_adv" class="form-control" id="inputName5" value="{{ Auth::user()->name }}">
            </div>
            <div class="col-md-6">
              <label for="tim" class="form-label">Label</label>
              <select id="inputState" name="tim" class="form-select">
                <option selected>Pilih...</option>
                <option value="akuisisi">Akuisisi</option>
                <option value="lc">LC</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="produk" class="form-label">Produk</label>
              <select id="inputState" name="produk" class="form-select">
                <option selected>Pilih...</option>
                <option value="etawaku">Etawaku</option>
                <option value="etawalin">Etawalin</option>
                <option value="freshmag">Freshmag</option>
                <option value="bio_insuleaf">Bio Insuleaf</option>
                <option value="zymuno">Zymuno</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="jumlah_pengajuan" class="form-label">Jumlah Pengajuan Biaya (Tanpa Titik)</label>
              <input type="text" name="jumlah_pengajuan" class="form-control" id="inputName5">
            </div>
            <div class="col-md-6">
              <label for="cap" class="form-label">CAP</label>
              <input type="text" name="cap" class="form-control" id="inputName5">
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

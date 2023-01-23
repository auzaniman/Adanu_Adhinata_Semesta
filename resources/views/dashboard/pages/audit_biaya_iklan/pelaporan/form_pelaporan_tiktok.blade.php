@extends('dashboard.layouts.app')
@section('title') Form Pelaporan @endsection

@section('content')
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Laporan Biaya Iklan Pekanan</h5>

          <!-- Multi Columns Form -->
          <form class="row g-3">
            <div class="col-md-6">
              <label for="inputName5" class="form-label">Nama Adv</label>
              <input type="text" class="form-control" id="inputName5">
            </div>
            <div class="col-md-6">
              <label for="inputEmail5" class="form-label">Produk</label>
              <input type="text" class="form-control" id="inputEmail5">
            </div>
            <div class="col-md-4">
              <label for="inputCity" class="form-label">File</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="col-md-4">
              <label for="inputZip" class="form-label">File</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="col-md-4">
              <label for="inputZip" class="form-label">File</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <div class="">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection
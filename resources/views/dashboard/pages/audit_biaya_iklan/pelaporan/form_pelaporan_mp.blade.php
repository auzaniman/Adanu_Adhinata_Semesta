@extends('dashboard.layouts.app')
@section('title') Form Pelaporan @endsection

@section('content')
<section class="section">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Laporan Biaya Iklan Pekanan MP</h5>
            <div>
              <button type="submit" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Tambahkan Toko
              </button>
              {{-- Modal --}}
              <div class="modal fade" id="basicModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Toko</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form class="row g-3" method="POST" action="{{ route('post_toko') }}">
                        @csrf
                        <div class="col-md-6">
                          <label for="platform" class="form-label">Platform</label>
                          <select class="form-select" name="platform">
                            <option>Pilih Toko...</option>
                            <option value="tokopedia">Tokopedia</option>
                            <option value="lazada">Lazada</option>
                            <option value="shopee">Shopee</option>
                          </select>
                        </div>
                        <div class="col-md-6">
                          <label for="nama_toko" class="form-label">Nama Toko</label>
                          <input type="text" name="nama_toko" class="form-control" id="inputName5">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->

              <button type="submit" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#basicModal1">List Toko</button>
              {{-- Modal --}}
              <div class="modal fade" id="basicModal1" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">List Toko</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- List group With badges -->
                      <ul class="list-group">
                      @forelse ($data_toko as $item)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          {{ $item->platform }} - {{ $item->nama_toko }}
                          <form action="{{route('delete_toko', $item->id)}}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn badge bg-danger rounded-pill">
                              <i class="bi bi-trash-fill"></i>
                            </button>
                          </form>
                        </li>
                        @empty
                        
                        @endforelse
                      </ul><!-- End List With badges -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->
            </div>
          </div>

          <!-- Form Pelaporan Biaya Iklan MP -->
          <form class="row g-3" method="POST" action="{{ route('post_pelaporan_mp') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-md-6" hidden>
              <label for="user_id" class="form-label">User ID</label>
              <input type="text" name="user_id" class="form-control" id="inputName5" value="{{ Auth::user()->id }}">
            </div>
            <div class="col-md-6" hidden>
              <label for="nama_adv" class="form-label">Nama Adv</label>
              <input type="text" name="nama_adv" class="form-control" id="inputName5" value="{{ Auth::user()->name }}">
            </div>
            <div class="col-md-12">
              <label for="toko" class="form-label">Toko</label>
              <select class="form-select" name="toko[]" id="multiple-select-field" data-placeholder="Pilih Toko" multiple>
                @foreach ($data_toko as $item)
                  <option value="{{ $item->platform }} - {{ $item->nama_toko }}">{{ $item->platform }} - {{ $item->nama_toko }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-4">
              <label for="ss_akun_toko" class="form-label">SS Akun Toko</label>
              <input class="form-control" name="ss_akun_toko" type="file" id="formFile">
            </div>
            <div class="col-md-4">
              <label for="ss_e-statement" class="form-label">SS Bank E-Statement</label>
              <input class="form-control" name="ss_e-statement" type="file" id="formFile">
            </div>
            <div class="col-md-4">
              <label for="ss_sisa_saldo" class="form-label">SS Sisa Saldo</label>
              <input class="form-control" name="ss_sisa_saldo_toko" type="file" id="formFile">
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

@push('script_multiple')
<script>
  $( '#multiple-select-field' ).select2( {
    theme: "bootstrap-5",
    width: $( this ).data( 'width' ) ? $( this ).data( 'width' ) : $( this ).hasClass( 'w-100' ) ? '100%' : 'style',
    placeholder: $( this ).data( 'placeholder' ),
    closeOnSelect: false,
  });
</script>
@endpush
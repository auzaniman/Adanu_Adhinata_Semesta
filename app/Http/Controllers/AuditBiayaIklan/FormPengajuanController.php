<?php

namespace App\Http\Controllers\AuditBiayaIklan;

use App\Models\PengajuanIklanAkuisisiModel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormPengajuanController extends Controller
{
  // AKUISISI
  public function indexAkuisisi()
  {
    return view('dashboard.pages.audit_biaya_iklan.pengajuan.form_pengajuan_akuisisi');
  }

  public function storePengajuanAkuisisi(Request $request)
  {
    $data = new PengajuanIklanAkuisisiModel();

    $data->user_id = Auth::user()->id;
    $data->nama_adv = Auth::user()->name;
    $data->produk = $request->produk;
    $data->tim = $request->tim;
    $data->jumlah_pengajuan = $request->jumlah_pengajuan;
    $data->cap = $request->cap;
    $data->save();

    return redirect()->back()->with([
      'message' => 'Berhasil ditambahkan',
      'status' => 'Sukses! Berhasil ditambahkan'
    ]);
  }
}

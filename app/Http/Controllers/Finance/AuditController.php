<?php

namespace App\Http\Controllers\Finance;

use App\Models\PelaporanIklanModel;
use App\Models\AuditBiayaIklanAkuisisiModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuditController extends Controller
{
  public function index(Request $request)
  {
    $data = PelaporanIklanModel::get();

    return view('dashboard.pages.finance.audit.audit', compact('data'))->with('i', ($request->input('page', 1) - 1) * 20);;
  }

  public function indexDataDana(Request $request)
  {
    $data = PelaporanIklanModel::select('pelaporan_iklan.*', 'aia.id as aia_id', 'aia.status as status')
      ->join('audit_iklan_akuisisi as aia', 'pelaporan_iklan.id', 'aia.pelaporan_id')
      ->where('status', 'ACC')
      ->get();

    return view('dashboard.pages.finance.audit.data_dana_acc', compact('data'))->with('i', ($request->input('page', 1) - 1) * 20);;
  }

  public function indexCetakPengajuan()
  {
    return view('dashboard.pages.finance.audit.cetak_pengajuan');
  }

  public function indexStatistikIklan()
  {
    return view('dashboard.pages.finance.audit.statistik_iklan');
  }

  public function showAuditAkuisisi($id)
  {
    $data = PelaporanIklanModel::select('pelaporan_iklan.*', 'pia.id as pia_id', 'pia.produk as produk', 'pia.jumlah_pengajuan as jumlah_pengajuan', 'pia.cap as cap')
      ->join('pengajuan_iklan_akuisisi as pia', 'pelaporan_iklan.user_id', 'pia.user_id')
      ->findOrFail($id);

    // ddd($data);

    return view('dashboard.pages.finance.audit.show_audit', compact('data'));
  }

  public function storeAuditAkuisisi(Request $request)
  {
    $data = new AuditBiayaIklanAkuisisiModel();

    $data->pelaporan_id = $request->pelaporan_id;
    $data->pengajuan_id = $request->pengajuan_id;
    $data->pengeluaran_iklan = $request->pengeluaran_iklan;
    $data->pengeluaran_akun = $request->pengeluaran_akun;
    $data->sisa_saldo = $request->sisa_saldo;
    $data->keterangan = $request->keterangan;
    $data->dana_acc = $request->dana_acc;
    $data->status = $request->status;

    $data->save();

    return redirect()->route('audit_iklan')->with([
      'message' => 'Berhasil ditambahkan',
      'status' => 'Sukses! Berhasil ditambahkan'
    ]);
  }

  public function showDanaACC($id)
  {
    $data = AuditBiayaIklanAkuisisiModel::findOrFail($id);

    return view('dashboard.pages.finance.audit.edit', compact('data'));
  }

  public function updateAuditAkuisisi(Request $request, $id)
  {
    $data = AuditBiayaIklanAkuisisiModel::findOrFail($id);

    $data->pelaporan_id = $request->pelaporan_id;
    $data->pengajuan_id = $request->pengajuan_id;
    $data->pengeluaran_iklan = $request->pengeluaran_iklan;
    $data->pengeluaran_akun = $request->pengeluaran_akun;
    $data->sisa_saldo = $request->sisa_saldo;
    $data->keterangan = $request->keterangan;
    $data->dana_acc = $request->dana_acc;
    $data->status = $request->status;

    $data->save();

    return redirect()->route('data_dana_acc')->with([
      'message' => 'Berhasil Diubah',
      'status' => 'Sukses! Berhasil Diubah'
    ]);
  }
}

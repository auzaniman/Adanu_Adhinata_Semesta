<?php

namespace App\Http\Controllers\AuditBiayaIklan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PelaporanIklanModel;
use Illuminate\Support\Facades\Auth;
use App\Models\TokoModel;
use App\Models\PelaporanIklanMPModel;

class FormPelaporanController extends Controller
{
  // AKUISISI
  public function indexAkuisisi()
  {
    return view('dashboard.pages.audit_biaya_iklan.pelaporan.form_pelaporan_akuisisi');
  }

  public function storePelaporanAkuisisi(Request $request)
  {
    $data = new PelaporanIklanModel();

    $data->user_id = Auth::user()->id;
    $data->nama_adv = Auth::user()->name;
    $data->tim = $request->tim;
    $data->nama_adv = $request->nama_adv;
    $data['ss_akun'] = $request->file('ss_akun')->store('', 'public');
    $data['ss_sisa_saldo'] = $request->file('ss_sisa_saldo')->store('', 'public');
    $data['ss_e_statement'] = $request->file('ss_e_statement')->store('', 'public');
    $data->save();

    return redirect()->back()->with([
      'message' => 'Berhasil ditambahkan',
      'status' => 'Sukses! Berhasil ditambahkan'
    ]);
  }

  // MARKETPLACE
  public function indexMP()
  {
    $data_toko = TokoModel::all();

    return view('dashboard.pages.audit_biaya_iklan.pelaporan.form_pelaporan_mp', compact('data_toko'));
  }

  public function storePelaporanMP(Request $request)
  {
    $data = new PelaporanIklanMPModel();

    $data->user_id = Auth::user()->id;
    $data->nama_adv = Auth::user()->name;
    $data->tim = $request->tim;
    $data['ss_akun_toko'] = $request->file('ss_akun_toko')->store('', 'public');
    $data['ss_sisa_saldo_toko'] = $request->file('ss_sisa_saldo_toko')->store('', 'public');
    $data['ss_e_statement'] = $request->file('ss_e_statement')->store('', 'public');

    $data->toko = $request->toko;
    $toko = $data['toko'];
    $data['toko'] = implode(',', $toko);

    $data->save();

    return redirect()->back()->with([
      'message' => 'Berhasil ditambahkan',
      'status' => 'Sukses! Berhasil ditambahkan'
    ]);
  }

  public function storeToko(Request $request)
  {
    $data = new TokoModel();

    $data->platform = $request->platform;
    $data->nama_toko = $request->nama_toko;
    $data->save();

    return redirect()->back()->with([
      'message' => 'Berhasil ditambahkan',
      'status' => 'Sukses! Berhasil ditambahkan'
    ]);
  }

  public function deleteToko($id)
  {
    $data = TokoModel::findOrFail($id);
    $data->delete();

    return redirect()->back()
    ->with([
      'message' => 'berhasil dihapus',
      'status' => 'Berhasil dihapus'
    ]);
  }
}

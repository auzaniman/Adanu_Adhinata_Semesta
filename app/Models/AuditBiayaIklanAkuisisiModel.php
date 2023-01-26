<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AuditBiayaIklanAkuisisiModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'audit_iklan_akuisisi';

  protected $fillable = [
    'pelaporan_id',
    'pengajuan_id',
    'pengeluaran_iklan',
    'pengeluaran_akun',
    'sisa_saldo',
    'keterangan',
    'dana_acc',
    'status'
  ];

  public function pelaporanAkuisisi()
  {
    return $this->belongsTo(PelaporanIklanModel::class);
  }

  public function pengajuanAkuisisi()
  {
    return $this->belongsTo(PengajuanIklanAkuisisiModel::class);
  }
}

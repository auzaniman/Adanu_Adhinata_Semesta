<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PelaporanIklanMPModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'pelaporan_iklan_mp';

  protected $fillable = [
    'user_id',
    'toko',
    'nama_adv',
    'ss_akun_toko',
    'ss_sisa_saldo_toko',
    'ss_e-statement',
  ];
  
  public function user()
  {
    return $this->belongsTo(User::class);
  }
  
  public function toko()
  {
    return $this->belongsTo(TokoModel::class);
  }
}

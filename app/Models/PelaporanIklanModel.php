<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PelaporanIklanModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'pelaporan_iklan';

  protected $fillable = [
    'user_id',
    'nama_adv',
    'produk',
    'tim',
    'ss_akun',
    'ss_sisa_saldo',
    'ss_e-statement',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}

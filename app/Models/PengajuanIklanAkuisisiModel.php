<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengajuanIklanAkuisisiModel extends Model
{
  use HasFactory;
  use SoftDeletes;

  protected $table = 'pengajuan_iklan_akuisisi';

  protected $fillable = [
    'user_id',
    'nama_adv',
    'produk',
    'tim',
    'jumlah_pengajuan',
    'cap',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}

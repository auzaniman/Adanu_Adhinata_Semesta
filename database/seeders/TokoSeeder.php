<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TokoModel;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data_toko = [
        [
          'platform' => 'tokopedia',
          'nama_toko' => 'HerbaFamili'
        ],
        [
          'platform' => 'lazada',
          'nama_toko' => 'HerbaFamiliKita'
        ],
        [
          'platform' => 'shopee',
          'nama_toko' => 'HerbaKita'
        ],
      ];

      TokoModel::insert($data_toko);
    }
}

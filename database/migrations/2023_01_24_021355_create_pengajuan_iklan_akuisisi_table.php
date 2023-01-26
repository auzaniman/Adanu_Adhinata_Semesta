<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_iklan_akuisisi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_adv');
            $table->string('tim'); //Akuisisi atau LC
            $table->string('produk');
            $table->string('jumlah_pengajuan');
            $table->string('cap');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_iklan_akuisisi');
    }
};

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
        Schema::create('pelaporan_iklan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_adv');
            $table->string('produk');
            $table->string('tim'); //Akuisisi atau LC
            $table->text('ss_akun');
            $table->text('ss_sisa_saldo');
            $table->text('ss_e-statement');
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
        Schema::dropIfExists('pelaporan_iklan');
    }
};

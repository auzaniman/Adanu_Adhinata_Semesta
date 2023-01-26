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
        Schema::create('audit_iklan_akuisisi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pelaporan_id');
            $table->foreignId('pengajuan_id');
            $table->string('pengeluaran_iklan');
            $table->string('pengeluaran_akun');
            $table->string('sisa_saldo');
            $table->text('keterangan')->nullable();
            $table->string('status')->default('Belum ACC');
            $table->string('dana_acc');
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
        Schema::dropIfExists('audit_iklan_akuisisi');
    }
};

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
        Schema::create('pelaporan_iklan_mp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('screenshot_id');
            $table->text('toko');
            $table->string('nama_adv');
            $table->string('tim');
            $table->string('status');
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
        Schema::dropIfExists('pelaporan_iklan_mp');
    }
};

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
        Schema::create('tb_administrasi', function (Blueprint $table) {
            $table->id();
            $table->string('id_akun');
            $table->string('id_pembeli');
            $table->string('id_service');
            $table->string('id_mobil_baru');
            $table->string('id_mobil_bekas');
            $table->string('id_tb_kategori_kerusakan');
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
        //
    }
};

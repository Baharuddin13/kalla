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
        Schema::create('mobil_baru', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('thn_keluar');
            $table->string('warna');
            $table->string('transmisi');
            $table->string('jenis_mobil');
            $table->string('id_ketegori');
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

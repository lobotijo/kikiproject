<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kas_keluar', function (Blueprint $table) {
            $table->id();
            $table->char('kode_akun',10);
            $table->string('nama_transaksi',25);
            $table->date('tgl_kas_masuk');
            $table->float('debit',12)->nullable();
            $table->float('kredit',12)->nullable();
            $table->float('saldo',12)->nullable();
            $table->string('keterangan',50);
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
        Schema::dropIfExists('kas_keluars');
    }
}

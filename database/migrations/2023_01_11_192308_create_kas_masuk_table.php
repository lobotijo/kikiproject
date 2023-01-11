<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kas_masuk', function (Blueprint $table) {
            $table->id();
            $table->char('kode_akun',10);
            $table->string('sumber',25);
            $table->date('tgl_kas_masuk');
            $table->float('debit')->nullable();
            $table->float('kredit');
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
        Schema::dropIfExists('kas_masuk');
    }
}

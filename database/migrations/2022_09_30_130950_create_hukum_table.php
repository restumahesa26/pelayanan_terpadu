<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHukumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hukum', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Permohonan Izin Magang dan Penelitian', 'Surat Tidak Pernah Dipidana Sebagai Terpidana', 'Surat Tidak Sedang Dicabut Hak Pilih', 'Surat Sedang Tidak Dinyatakan Pailit', 'Surat Tidak Memiliki Tanggungan Hutang']);
            $table->string('link');
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
        Schema::dropIfExists('hukum');
    }
}

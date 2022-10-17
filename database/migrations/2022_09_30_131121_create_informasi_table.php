<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_pengaduan', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Informasi Administrasi Layanan', 'Informasi Humas', 'Pengaduan Melalui PN Langsa', 'Pengaduan Melalui Siwas', 'Pengaduan Gratifikasi', 'Pengaduan Terkait Layanan']);
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
        Schema::dropIfExists('informasi');
    }
}

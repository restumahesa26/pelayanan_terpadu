<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePidanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pidana', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Cek Denda Tilang', 'Izin Penggeledahan & Penyitaan', 'Pelimpahan Berkas', 'Perpanjangan Penahanan', 'Izin Besuk Tahanan & Pinjam Pakai Barang Bukti']);
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
        Schema::dropIfExists('pidana');
    }
}

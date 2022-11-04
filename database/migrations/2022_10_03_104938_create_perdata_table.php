<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerdataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perdata', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Pendaftaran Gugatan', 'Pendaftaran Gugatan Sederhana', 'Pendaftaran Permohononan / Volountair', 'Pendaftaran Bantahan', 'Pendaftaran Upaya Hukum Banding', 'Permohonan Izin Keterlambatan Sidang Perdata Gugatan Dari Para Pihak']);
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
        Schema::dropIfExists('perdata');
    }
}

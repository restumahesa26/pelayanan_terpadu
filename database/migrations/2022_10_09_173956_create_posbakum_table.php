<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosbakumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posbakum', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis', ['Telepon', 'Sms', 'Whatsapp', 'Facebook', 'Instagram', 'Email', 'Disabilitas / Kaum Renta']);
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
        Schema::dropIfExists('posbakum');
    }
}

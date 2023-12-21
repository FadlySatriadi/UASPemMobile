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
        Schema::create('pendors', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pendor');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->string('no_telp');
            $table->string('sosmed');
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
        Schema::dropIfExists('pendors');
    }
};

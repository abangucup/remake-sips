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
        Schema::create('kenderaans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kenderaan')->unique();
            $table->string('nama_kenderaan');
            $table->foreignId('jenis_id')->constrained()->onDelete('restrict');
            $table->string('nomor_polisi')->unique();
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
        Schema::dropIfExists('kenderaans');
    }
};

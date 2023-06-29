<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerhitungansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->decimal('penghasilan', 10, 2);
            $table->integer('usia');
            $table->string('status_pekerjaan');
            $table->integer('keluarga');
            $table->string('status_rumah');
            $table->string('penjamin');
            $table->decimal('cicilan', 10, 2);
            $table->boolean('bpkb_kendaraan');
            $table->integer('lama_bekerja');
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
        Schema::dropIfExists('perhitungans');
    }
}

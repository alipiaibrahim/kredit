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
            $table->decimal('usia');
            $table->decimal('status_pekerjaan');
            $table->decimal('keluarga');
            $table->decimal('status_rumah');
            $table->decimal('penjamin');
            $table->decimal('cicilan', 10, 2);
            $table->decimal('bpkb_kendaraan');
            $table->decimal('lama_bekerja');
            $table->decimal('hasil');
            $table->string('status')->nullable();
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

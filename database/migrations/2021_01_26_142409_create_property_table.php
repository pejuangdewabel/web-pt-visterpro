<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->id();
            $table->string('nama_properti');
            $table->string('ukuran');
            $table->integer('harga_dp');
            $table->integer('harga_cash');
            $table->integer('harga_permeter');
            $table->longText('kata_thumb');
            $table->longText('foto');
            $table->longText('deskripsi');
            $table->string('lokasi');
            $table->string('kabkot');
            $table->longText('syarat');
            $table->longText('dekat');
            $table->string('status1');
            $table->string('status2');
            $table->softDeletes();
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
        Schema::dropIfExists('property');
    }
}

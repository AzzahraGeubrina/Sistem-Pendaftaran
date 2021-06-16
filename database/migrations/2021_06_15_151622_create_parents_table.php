<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('nama_ayah');
            $table->string('alamat_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nohp_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('nohp_ibu');
            $table->string('nama_wali');
            $table->string('alamat_wali');
            $table->string('nohp_wali');
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
        Schema::dropIfExists('parents');
    }
}

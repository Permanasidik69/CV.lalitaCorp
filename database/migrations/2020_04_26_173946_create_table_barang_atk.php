<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBarangAtk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mdata_atk', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('nama_barang');
            $table->integer('harga');
            $table->string('stok_barang');
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mdata_atk', function (Blueprint $table) {
            //
        });
    }
}

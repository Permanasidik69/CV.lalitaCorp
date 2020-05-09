<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFormAtk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_atk', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('nama_barang')->unsigned();
            $table->integer('harga')->unsigned();
            $table->integer('qty');
            $table->text('keterangan');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->foreign('nama_barang')->references('id')->on('mdata_atk')->onDelete('restrict');
            $table->foreign('harga')->references('id')->on('mdata_atk')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('form_atk', function (Blueprint $table) {
            //
        });
    }
}

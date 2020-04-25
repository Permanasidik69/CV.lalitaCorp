<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFormHobimen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_hobimen', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('supplier')->unsigned();
            $table->integer('nama_barang')->unsigned();
            $table->integer('sku')->unsigned();
            $table->integer('harga_beli')->unsigned();
            $table->integer('qty');
            $table->integer('keterangan');
            $table->timestamps();

            $table->foreign('supplier')->references('id')->on('m_supplier')->onDelete('restrict');
            $table->foreign('nama_barang')->references('id')->on('mdata_hobimen')->onDelete('restrict');
            $table->foreign('sku')->references('id')->on('mdata_hobimen')->onDelete('restrict');
            $table->foreign('harga_beli')->references('id')->on('mdata_hobimen')->onDelete('restrict');
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
        Schema::table('form_hobimen', function (Blueprint $table) {
            //
        });
    }
}

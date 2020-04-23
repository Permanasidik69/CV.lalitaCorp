<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterdataAdv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mdata_adv', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('supplier')->unsigned();
            $table->string('nama_barang',255);
            $table->string('sku',30);
            $table->integer('stok');
            $table->integer('minimal_stok');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->string('foto');
            $table->timestamps();

            $table->foreign('supplier')->references('id')->on('m_supplier')->onDelete('restrict');
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
        Schema::table('mdata_adv', function (Blueprint $table) {
            //
        });
    }
}

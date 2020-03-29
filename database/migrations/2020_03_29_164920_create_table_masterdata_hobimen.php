<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMasterdataHobimen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mdata_hobimen', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('supplier')->unsigned();
            $table->string('nama_barang',255);
            $table->string('sku',30);
            $table->integer('stok');
            $table->integer('minimal_stok');
            $table->integer('harga');
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
        Schema::table('mdata_hobimen', function (Blueprint $table) {
            //
        });
    }
}

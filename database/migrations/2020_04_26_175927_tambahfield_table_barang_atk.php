<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TambahfieldTableBarangAtk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mdata_atk', function (Blueprint $table) {
            //
            $table->integer('minimal_stok')->after('stok_barang');
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

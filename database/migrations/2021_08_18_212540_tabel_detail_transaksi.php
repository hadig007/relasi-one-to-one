<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelDetailTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_detail_transaksi', function(Blueprint $table)
        {
            $table->id();
            $table->foreignId('transaksi_id')->constrained('tabel_transaksi')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('barang_id')->constrained('tabel_barang')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('jumlah_pembelian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

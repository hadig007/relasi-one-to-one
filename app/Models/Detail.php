<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'tabel_detail_transaksi';

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang');
    }
    public function tanggal()
    {
        return $this->belongsTo('App\Models\Tanggal');
    }
}

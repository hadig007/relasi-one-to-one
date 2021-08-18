<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggal extends Model
{
    protected $table = 'tabel_transaksi';

    public function detail()
    {
        return $this->hasOne('App\Models\Detail');
    }
}

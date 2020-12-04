<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['barang_id', 'namabarang', 'hargajual', 'hargabeli', 'satuan', 'kategory'];

    public function penjualan()
    {
        return $this->hasMany('App\Penjualan');
    }
}

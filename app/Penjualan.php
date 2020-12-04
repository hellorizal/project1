<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = ['nofaktur', 'namakonsumen', 'barang_id', 'jumlah', 'hargajual', 'total'];

    public function barang()
    {
        return $this->belongsTo('App\Barang');
    }
}

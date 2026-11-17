<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //panggil dulu tabelnya
    protected $table = 'barangs';

    //kita tentukan kolom yg boleh diisi atau
    //tidak boleh diisi
    protected $guarded = [
        'id',
        'timestamps'
    ];
}

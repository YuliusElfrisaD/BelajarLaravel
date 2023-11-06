<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftar_pegawai extends Model
{
    use Pegawai;

    protected $table = 'gaji'
    protected $fillable = [
        'id_pegawai',
        'jumlah_gaji',
        'dari_tanggal',
        'sampai_tanggal',
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = [
      'id_pemohon','nama_gedung','tgl_pesan','acara','jumlah_tamu','dekorasi','konsumsi','ruang',
    ];
}

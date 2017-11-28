<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    protected $fillable = [
      'id_pemohon_rumah','lokasi_tanah' ,'id_kecamatan','id_kelurahan','luas_tanah','batas_utara','batas_timur','batas_barat',
        'batas_selatan','tahun_mulai','asal_tanah',
    ];
}

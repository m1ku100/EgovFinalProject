<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemohon extends Model
{
    protected $fillable = [
      'id_user','nik','nama','alamat','tempat_lahir','tgl_lahir','kota_tinggal','provinsi_tinggal','no_telp',
    ];
}

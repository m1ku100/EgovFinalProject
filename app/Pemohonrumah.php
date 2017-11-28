<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemohonrumah extends Model
{
   protected $fillable = [
     'id_user', 'jenis_izin', 'nik', 'nama','tempat_lahir','tgl_lahir', 'alamat', 'pekerjaan', 'no_telp', 'email', 'iskuasa'
       ];
}

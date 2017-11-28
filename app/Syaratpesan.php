<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Syaratpesan extends Model
{
    protected $fillable = [
      'id_pesan','ktp','status',
    ];
}

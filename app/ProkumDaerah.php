<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProkumDaerah extends Model
{
    protected $table = 'prokum_daerah';

    protected $fillable = [
        'bentuk', 'no_per', 'tahun', 'judul', 'katalog', 'abstrak', 'file', 'lampiran', 'status'
    ];
}

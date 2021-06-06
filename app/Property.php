<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use SoftDeletes;
    protected $table = 'property';

    protected $fillable = [
        'nama_properti',
        'ukuran',
        'harga_dp',
        'harga_cash',
        'harga_permeter',
        'kata_thumb',
        'foto',
        'deskripsi',
        'lokasi',
        'kabkot',
        'syarat',
        'dekat',
        'status1',
        'status2',
        'slug'
    ];

    protected $hidden = [

    ];
}

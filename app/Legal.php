<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Legal extends Model
{
    protected $table = 'legalitas';
    protected $fillable = [
        'title',
        'image',
        'description'
    ];
    protected $hidden = [];
}

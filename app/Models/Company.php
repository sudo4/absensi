<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'sippmi',
        'alamat',
        'telp_kantor',
        'telp_kantor2',
        'surel',
    ];
}

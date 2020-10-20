<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Member extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'company_id',
        'no_hp',
        'photo',
        'kehadiran',
        'absensi',
       
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}

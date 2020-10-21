<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{

    protected $fillable = [
        'member_id',
        'masuk',
        'keluar',

    ];

    public function member() {
        return $this->belongsTo('App/Models/Member', 'id', 'member_id');
    }
        
}

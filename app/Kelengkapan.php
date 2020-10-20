<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelengkapan extends Model
{
    protected $table = 'kelengkapan';
    protected $fillable = ['nama','mobil_id'];

    public function mobil()
    {
        return $this->belongsTo('App\Mobil','mobil_id');
    }
}

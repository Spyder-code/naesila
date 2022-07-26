<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    protected $fillable = ['nama','harga_hari','harga_jam','deskripsi','image','image_path','status','slug'];

    public function kelengkapan()
    {
        return $this->hasMany('App\Kelengkapan');
    }
}

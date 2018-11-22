<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
     protected $fillable = [
        'nama',
    ];

    public function resep()
    {
    	return $this->hasMany('App\Resep');
    }
}

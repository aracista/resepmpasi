<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillable = [
        'kategori_id',
        'judul',
        'isi',
        'gambar',
    ];

    public function kategori()
    {
    	return $this->belongsTo('App\Kategori');
    }
}

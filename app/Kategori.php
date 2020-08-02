<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori'];
    public function buku() {
    	return $this->belongsToMany('App\Buku', 'kategori_buku', 'id_kategori', 'id_buku');
    }
}

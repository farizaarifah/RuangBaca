<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';

    protected $fillable = [
    	'id_buku',
    	'judul',
    	'penulis',
    	'id_penerbit',
        'sinopsis',
        'foto'
        
    ];

    // membuat accessor
    public function getJudulBukuAttribute($judul){
		return ucwords($judul);
	}
	// membuat mutator
	public function setJudulBukuAttribute($judul){
		$this->attributes['judul'] = strtolower($judul);
	}

    public function penerbit(){
        return $this->belongsTo('App\Penerbit', 'id_penerbit');
    }

    public function kategori(){
        return $this->belongsToMany('App\Kategori', 'kategori_buku', 'id_buku', 'id_kategori')->withTimeStamps();
    }

    public function getBukuAttribute(){
        return $this->kategori->pluck('id')->toArray();
    }
}

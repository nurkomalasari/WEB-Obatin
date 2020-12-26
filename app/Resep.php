<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = 'unggahresep';
    protected $fillable = [
        'id_konsumen','resep','keterangan','balasan'
    ];
    public function konsumen(){
    	return $this->belongsTo(Konsumen::class,'id');
    }
}

<?php

namespace App;
use isi;
use Illuminate\Database\Eloquent\Model;

class indexing extends Model
{
    protected $table='a';
    protected $fillable=[
        'codesur'
        
    ];
    public function isi(){
        return $this->hasMany('App\isi','n_id');
    }
    public function inid(){
        return 'dsfdsf';
    }
}

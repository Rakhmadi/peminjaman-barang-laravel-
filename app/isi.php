<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class isi extends Model
{
    protected $table='b';
    protected $fillable=[
        'namaaset',
       'noaset',
        'spc',
        'lem',
        'ket',
        'code',
       
    ];
    public function surat(){
        return $this->belongsTo('App\indexing','id');
    }
}

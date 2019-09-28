<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    protected $fillable = [
        'id','url', 'type'
    ];

    public function getUrlPathAttribute(){
        return \Storage::url($this->url);
    }
}

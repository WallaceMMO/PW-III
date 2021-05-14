<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilterTag extends Model{

    public $timestamps = false;

    protected $guarded = [];
    
    public function technicality(){
        return $this->belongsTo('App\Technicality');
    }
}

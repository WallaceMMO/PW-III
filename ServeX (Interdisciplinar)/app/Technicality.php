<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technicality extends Model{
    protected $guarded = [];

    protected $primaryKey = 'id';
    
    public function filter_tags(){
        return $this->hasMany('App\FilterTag');
    }
}

<?php

namespace mywishlist\models;

use \Illuminate\Database\Eloquent\Model;

class Item extends Model {

    protected $table = 'item';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function Liste(){
        return $this->belongsTo('mywishlist\models\Liste','liste_id');
    }

}
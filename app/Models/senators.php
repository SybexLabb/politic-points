<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class senators extends Model
{
 	protected $primaryKey = 'id';
  	protected $table = 'senators';
    protected $guarded = [];


    public function recent_legislation () {
        return $this->belongsTo(recent_legislation::class,'senator_id');

}

}

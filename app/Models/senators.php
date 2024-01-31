<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class senators extends Model
{
 	protected $primaryKey = 'id';
  	protected $table = 'senators';
    protected $guarded = [];


    public function recentLegislations()
    {
        return $this->hasMany(recent_legislation::class, 'senator_id');
    }
}



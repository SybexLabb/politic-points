<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class senators extends Model
{
 	protected $primaryKey = 'id';
  	protected $table = 'senators';
    protected $guarded = [];


    public function scopeActive($query)
    {
        return $query->where('is_active', 1)->where('is_deleted', 0);
    }
    public function recentLegislations()
    {
        return $this->hasMany(recent_legislation::class, 'senator_id');
    }
}



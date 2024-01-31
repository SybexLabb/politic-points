<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recent_legislation extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'recent_legislation';
    protected $guarded = [];

    public function senators(){

        return $this->belongsTo(senators::class, 'senator_id');
    }


}

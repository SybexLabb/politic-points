<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'news';
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1)->where('is_deleted', 0);
    }
    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }
}

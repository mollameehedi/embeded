<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = ['_token'];
    // function category()
    // {
    //     return $this->hasOne('App\Models\Category', 'id', 'category_id');
    // }
    
    public function category()
    {
        return $this->belongsTo('App\Models\Category')->withDefault();
    }
}

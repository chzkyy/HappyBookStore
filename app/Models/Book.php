<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model 
{
    use HasFactory;
    
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function detail(){
        return $this->hasOne(Detail::class,'book_id');
    }
    
    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query,$search){
            return $query->where('title','like','%'.$search  . '%');
        });
    }
}

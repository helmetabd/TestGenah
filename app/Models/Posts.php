<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filter){
        if($filter['search'] ?? false){
            $query->where('name', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%');
        }
        if($filter['featured'] ?? false){
            $query->where('featured', 'like', '%' . request('featured') . '%');
        } else{
            $query->where('featured', 'like', '%' . request('featured') . '%');
        }
    }
}

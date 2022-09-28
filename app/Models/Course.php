<?php

namespace App\Models;
use app\Models\Theme;
use app\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function themes(){
        return $this->belongsToMany(Theme::class);
    }
    use HasFactory;
}

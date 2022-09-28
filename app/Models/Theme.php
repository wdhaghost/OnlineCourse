<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    use HasFactory;
}

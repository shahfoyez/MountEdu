<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubject extends Model
{
    /** @use HasFactory<\Database\Factories\CourseSubjectFactory> */
    use HasFactory;
    protected $fillable = [
        'name', 'parent_id'
    ];
    public function course()
    {
        return $this->hasMany(Course::class, 'subject_id');
    }
    // Define relationship to fetch child subjects
    public function children()
    {
        return $this->hasMany(CourseSubject::class, 'parent_id');
    }

    // Define relationship to fetch parent subject (optional)
    public function parent()
    {
        return $this->belongsTo(CourseSubject::class, 'parent_id');
    }
}

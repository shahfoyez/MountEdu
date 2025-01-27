<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;
    protected $guarded = [];
    public function subject()
    {
        return $this->belongsTo(CourseSubject::class, 'subject_id');
    }
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}

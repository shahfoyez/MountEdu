<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WpUser extends Model
{
    /** @use HasFactory<\Database\Factories\WpUserFactory> */
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function provider()
    {
        return $this->hasOne(Provider::class, 'user_id');
    }
}

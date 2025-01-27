<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderMedia extends Model
{
    /** @use HasFactory<\Database\Factories\ProviderMediaFactory> */
    use HasFactory;
    protected $fillable = [
        'name', 'file_type', 'title'
    ];
    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider_id');
    }
}

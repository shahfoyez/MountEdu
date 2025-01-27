<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    /** @use HasFactory<\Database\Factories\ProviderFactory> */
    use HasFactory;
    protected $fillable = [
        'user_id', 'api_token', 'contact_preference', 'sales_mail',
        'response_time', 'include_weekends', 'about_us', 'choose_us'
    ];
    public function wpUser()
    {
        return $this->belongsTo(WpUser::class, 'user_id');
    }
    public function media()
    {
        return $this->hasMany(ProviderMedia::class, 'provider_id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'specialty',
        'service_details',
        'work_hours',
    ];

    // User ile ilişkisi (Hizmet sağlayıcı)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    // Toplu atama için izin verilen alanlar
    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'provider_name',
        'provider_specialty',
        'provider_work_hours',
        'appointment_date',
        'notes'
    ];

    // Müşteri ve hizmet sağlayıcı ilişkilerini tanımlama
    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

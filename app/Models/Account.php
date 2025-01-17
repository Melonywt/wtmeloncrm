<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['platform_id', 'login', 'password', 'address', 'invite_link', 'max_clients', 'next_payment_date'];

    public function platform()
    {
        return $this->belongsTo(Platform::class); // Акаунт належить платформі
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class); // Один акаунт має багато підписок
    }
}

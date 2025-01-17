<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'account_id', 'platform_id', 'type', 'price', 'start_date', 'end_date', 'status'];

    public function client()
    {
        return $this->belongsTo(Client::class); // Підписка належить клієнту
    }

    public function account()
    {
        return $this->belongsTo(Account::class); // Підписка належить акаунту (якщо це Membership)
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class); // Підписка належить платформі
    }
}

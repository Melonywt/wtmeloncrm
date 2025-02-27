<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function accounts()
    {
        return $this->hasMany(Account::class); // Платформа має багато акаунтів
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class); // Платформа має багато підписок
    }
}

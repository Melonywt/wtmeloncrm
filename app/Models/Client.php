<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ["name", "contact"];  // Поля, які можна масово заповнювати

    public function subscription()
    {
        return $this->hasMany(Subscription::class); // Один клієнт має багато підписок
    }
}

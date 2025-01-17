<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platform_id')->constrained(); // Прив'язка до платформи
            $table->string('login'); // Логін акаунта
            $table->string('password'); // Пароль акаунта
            $table->string('address')->nullable(); // Адреса для Spotify Family
            $table->string('invite_link')->nullable(); // Посилання на запрошення
            $table->integer('max_clients')->default(6); // Максимальна кількість клієнтів
            $table->date('next_payment_date'); // Дата наступної оплати
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};

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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained(); // Прив'язка до клієнта
            $table->foreignId('account_id')->nullable()->constrained(); // Прив'язка до акаунта (для Membership)
            $table->foreignId('platform_id')->constrained(); // Прив'язка до платформи
            $table->enum('type', ['Individual', 'Duo', 'Family', 'Membership']); // Тип підписки
            $table->decimal('price', 8, 2); // Сума оплати
            $table->date('start_date'); // Дата початку підписки
            $table->date('end_date')->nullable(); // Дата закінчення підписки
            $table->enum('status', ['active', 'expired']); // Статус підписки
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};

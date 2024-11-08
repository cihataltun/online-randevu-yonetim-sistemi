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
        Schema::create('provider_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // Kullanıcıya bağlı
            $table->string('specialty'); // Uzmanlık alanı
            $table->string('service_details'); // Hizmet detayları
            $table->string('work_hours'); // Çalışma saatleri
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provider_details');
    }
};

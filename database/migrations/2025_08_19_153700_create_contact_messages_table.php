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
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 120);
            $table->string('email', 150);
            $table->string('phone', 40)->nullable();
            $table->string('subject', 150);
            $table->text('message');
            $table->boolean('consent')->default(false);
            $table->string('ip_address', 45)->nullable(); // for logging user IP (IPv6 safe)
            $table->string('user_agent')->nullable();    // optional, track browser/device
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_messages');
    }
};

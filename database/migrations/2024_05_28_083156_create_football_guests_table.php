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
        Schema::create('football_guests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('guest_name');
            $table->string('phone_number', 30)->nullable();
            $table->tinyInteger('invitation')->default(0);
            $table->enum('status', ['accepted', 'pending', 'declined'])->default('pending');
            $table->timestamp('response_at')->nullable();
            $table->integer('guests_attended')->default(0);
            $table->text('reminder')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('football_guests');
    }
};

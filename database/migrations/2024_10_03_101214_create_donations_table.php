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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->decimal('donation_amount', 10, 2);
            $table->string('recurring_donation')->nullable();
            $table->string('donation_campaign')->nullable();
            $table->text('donation_message')->nullable();
            $table->boolean('anonymous_donation')->default(false);
            $table->unsignedBigInteger('donator_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};

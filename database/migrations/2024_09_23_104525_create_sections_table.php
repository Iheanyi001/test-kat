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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');       // Section name (e.g., "Hero", "Footer")
            $table->string('slug');       // Unique identifier for sections
            $table->text('content');      // Section content as HTML
            $table->integer('order');     // Order of the section on the page
            $table->boolean('is_active'); // Status of the section
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};

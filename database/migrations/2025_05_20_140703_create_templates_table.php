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
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });

        Schema::create('template_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('position');
            $table->foreignId('template_id');
            $table->timestamps();
        });

        Schema::create('template_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('template_section_id');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
        Schema::dropIfExists('template_section');
        Schema::dropIfExists('template_items');
    }
};

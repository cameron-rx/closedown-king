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
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('user_id');
            $table->timestamps();
        });

        Schema::create('checklist_item_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('position');
            $table->foreignId('checklist_id');
            $table->timestamps();
        });

        Schema::create('checklist_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_complete');
            $table->integer('position');
            $table->foreignId('checklist_item_group_id');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checklists');
        Schema::dropIfExists('checklist_item_groups');
        Schema::dropIfExists('checklist_items');
    }
};

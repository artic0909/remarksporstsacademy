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
        Schema::create('admin_how_we_are_models', function (Blueprint $table) {
            $table->id();
            $table->string('who_image');
            $table->string('who_title');
            $table->string('who_desc');
            $table->string('who_date');
            $table->string('who_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_how_we_are_models');
    }
};

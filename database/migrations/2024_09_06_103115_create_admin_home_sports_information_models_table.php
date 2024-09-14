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
        Schema::create('admin_home_sports_information_models', function (Blueprint $table) {
            $table->id();
            $table->string('sports_image');
            $table->string('sports_category');
            $table->string('sports_title');
            $table->text('sports_description');
            $table->date('sports_date');
            $table->time('sports_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_home_sports_information_models');
    }
};

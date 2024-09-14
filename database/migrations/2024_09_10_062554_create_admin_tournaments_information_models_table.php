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
        Schema::create('admin_tournaments_information_models', function (Blueprint $table) {
            $table->id();
            $table->string('td_image');
            $table->string('td_category');
            $table->string('td_title');
            $table->string('td_add');
            $table->date('td_date');
            $table->string('td_time');
            $table->text('td_desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_tournaments_information_models');
    }
};

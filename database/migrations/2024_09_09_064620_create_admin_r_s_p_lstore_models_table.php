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
        Schema::create('admin_r_s_p_lstore_models', function (Blueprint $table) {
            $table->id();
            $table->string('rs_img');
            $table->string('rs_title');
            $table->string('rs_price');
            $table->string('rs_discount');
            $table->string('rs_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_r_s_p_lstore_models');
    }
};

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
        Schema::create('admin_student_admission_models', function (Blueprint $table) {
            $table->id();
            $table->string('st_img');
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->string('f_name');
            $table->string('m_name');
            $table->string('nationality');
            $table->string('add');
            $table->string('pin_no');
            $table->string('tele');
            $table->string('mob');
            $table->string('email');
            $table->string('height');
            $table->string('weight');
            $table->string('medical_history');
            $table->string('health_problemms');
            $table->string('cer_dob');
            $table->string('cer_fit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_student_admission_models');
    }
};

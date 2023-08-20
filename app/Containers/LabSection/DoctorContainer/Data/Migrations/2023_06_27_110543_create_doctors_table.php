<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
//            $table->foreign('')->references('id')->on('skills');
            $table->foreignId('skill_id')->constrained('skills')->cascadeOnDelete()->cascadeOnUpdate();
            $table->bigInteger('doctorcode');
            $table->char('name');
            $table->char('family');
            $table->string('nationalcode');
            $table->string('mobile');
            $table->string('birthday');
            $table->string('pass');
            $table->boolean('is_active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};

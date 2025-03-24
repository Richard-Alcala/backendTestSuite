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
        Schema::create('test_suites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 255)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('platform', 255)->nullable();
            $table->string('status', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_suites');
    }
};

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
        Schema::create('outlet', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string('otl_code')->nullable();
            $table->string('otl_name')->nullable();
            $table->string('otl_picture')->nullable();
            $table->string('otl_address')->nullable();
            $table->string('otl_contact')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outlet');
    }
};

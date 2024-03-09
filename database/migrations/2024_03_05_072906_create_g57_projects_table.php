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
        Schema::create('g57_projects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('contactNumber')->nullable();
            $table->string('projectTitle')->nullable();
            $table->string('budget')->nullable();
            $table->date('deadline')->nullable();
            $table->string('location')->nullable();
            $table->longText('other')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g57_projects');
    }
};

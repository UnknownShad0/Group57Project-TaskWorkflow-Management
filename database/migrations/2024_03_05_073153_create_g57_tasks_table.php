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
        Schema::create('g57_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('projectName');
            $table->string('projectTask');
            $table->string('priority');
            $table->string('assign');
            $table->date('deadline');
            $table->string('submitter')->nullable();
            $table->string('other')->nullable();
            $table->date('date')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g57_tasks');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_task_group57_dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('current_project')->nullable()->default('-');
            $table->string('completed_tasks')->nullable()->default('0');        
            $table->string('incomplete_tasks')->nullable()->default('0');
            $table->string('total_tasks')->nullable()->default('0');
            $table->timestamps();
        });

        DB::table('project_task_group57_dashboards')->insert([
            'current_project' => '-',
            'completed_tasks' => '0',
            'incomplete_tasks' => '0',
            'total_tasks' => '0',
            // Add other columns and values as needed
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_task_group57_dashboards');
    }
};

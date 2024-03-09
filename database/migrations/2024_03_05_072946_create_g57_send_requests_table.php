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
        Schema::create('g57_send_requests', function (Blueprint $table) {
            $table->id();
            $table->string("project_name");
            $table->longText('asset_inventory')->nullable();
            $table->longText('supplier_vendor')->nullable();
            $table->longText('subcontractor')->nullable();
            $table->longText('budgeting_financial')->nullable();
            $table->longText('facility_management')->nullable();
            $table->longText('legal_contract')->nullable();
            $table->longText('risk')->nullable();
            $table->longText('communication_collab')->nullable();
            $table->longText('meetings_calendar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('g57_send_requests');
    }
};

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class G57SendRequest extends Model
{
    protected $fillable = [
        "project_id",
        "asset_inventory",
        "supplier_vendor",
        "subcontractor",
        "budgeting_financial",
        "facility_management",
        "legal_contract",
        "risk",
        "communication_collab",
        "meetings_calendar",
        "can_start_task"
    ];
    use HasFactory;
}

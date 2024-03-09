<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        "project_name",
        "asset_inventory",
        "supplier_vendor",
        "subcontractor",
        "budgeting_financial",
        "facility_management",
        "legal_contract",
        "risk",
        "communication_collab",
        "meetings_calendar",
    ];
}

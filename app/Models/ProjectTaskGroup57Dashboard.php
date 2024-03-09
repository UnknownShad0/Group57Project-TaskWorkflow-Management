<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTaskGroup57Dashboard extends Model
{
    protected $fillable = [
        'current_project',
        'completed_tasks',
        'incomplete_tasks',
        'total_tasks',
    ];
    use HasFactory;
}

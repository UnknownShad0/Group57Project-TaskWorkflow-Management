<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class G57Task extends Model
{
    protected $fillable = [
        'projectId',
        'projectTask',
        'priority',
        'assign',
        'deadline',
        'submitter',
        'other',
        'date',
        'status'

    ];
    use HasFactory;
}

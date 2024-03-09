<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class G57Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'contactNumber',
        'projectTitle',
        'budget',
        'deadline',
        'location',
        'other',
        'status',
        'is_active'
    ];
}

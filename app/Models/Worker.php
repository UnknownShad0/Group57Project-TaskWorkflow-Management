<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $table = "g57_workers";
    protected $fillable = [
        'name',
        'email',
        'position'
    ];
    use HasFactory;
}

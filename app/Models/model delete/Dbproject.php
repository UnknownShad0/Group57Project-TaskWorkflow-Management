<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dbproject extends Model
{

    protected $fillable = [
        'proj_name',
        'cli_name',
        'image'
    ];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'status',
        'created_at',
        'updated_at'
    ];
}

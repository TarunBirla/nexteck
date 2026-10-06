<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'work_email',
        'company',
        'team_size',
        'pain_point',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmeToolkit extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'company_name',
        'client_email',
        'phone',
        'diagnostic_data',
        'benchmark_data',
        'competitor_data',
        'opportunity_data',
        'sop_data',
        'kpi_data',
        'status',
        'admin_notes',
    ];

    protected $casts = [
        'diagnostic_data'  => 'array',
        'benchmark_data'   => 'array',
        'competitor_data'  => 'array',
        'opportunity_data' => 'array',
        'sop_data'         => 'array',
        'kpi_data'         => 'array',
    ];
}

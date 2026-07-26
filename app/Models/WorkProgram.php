<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'period_id',
        'name',
        'description',
        'sekbid_owner',
        'status',
        'target_date',
    ];

    protected $casts = [
        'target_date' => 'date',
    ];

    public function period(): BelongsTo
    {
        return $this->belongsTo(Period::class);
    }
}

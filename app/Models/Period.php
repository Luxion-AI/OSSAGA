<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Period extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_year',
        'end_year',
        'cabinet_name',
        'theme',
        'chairman_greeting',
        'chairman_photo_path',
        'is_active',
        'visual_identity',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'visual_identity' => 'array',
    ];

    /**
     * Get the active period.
     */
    public static function active()
    {
        return static::where('is_active', true)->first();
    }

    /**
     * Users associated with this period (pengurus).
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)
                    ->withPivot(['role', 'position_name', 'sekbid_name'])
                    ->withTimestamps();
    }

    /**
     * Contents tied to this period.
     */
    public function contents(): HasMany
    {
        return $this->hasMany(Content::class);
    }

    /**
     * Work programs for this period.
     */
    public function workPrograms(): HasMany
    {
        return $this->hasMany(WorkProgram::class);
    }
}

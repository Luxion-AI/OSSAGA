<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    public function canAccessPanel(Panel $panel): bool
    {
        // Only allow superadmins or users with an active role
        return $this->is_superadmin || $this->roleInActivePeriod() !== null;
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_superadmin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_superadmin' => 'boolean',
        ];
    }

    /**
     * Get the periods this user has been part of.
     */
    public function periods(): BelongsToMany
    {
        return $this->belongsToMany(Period::class)
                    ->withPivot(['role', 'position_name', 'sekbid_name'])
                    ->withTimestamps();
    }

    /**
     * Helper to check user's role in the active period.
     */
    public function roleInActivePeriod(): ?string
    {
        if ($this->is_superadmin) {
            return 'superadmin';
        }

        $activePeriod = Period::active();
        if (!$activePeriod) return null;

        $membership = $this->periods()->where('period_id', $activePeriod->id)->first();
        
        return $membership ? $membership->pivot->role : null;
    }

    public function sekbidInActivePeriod(): ?string
    {
        $activePeriod = Period::active();
        if (!$activePeriod) return null;

        $membership = $this->periods()->where('period_id', $activePeriod->id)->first();
        
        return $membership ? $membership->pivot->sekbid_name : null;
    }
}

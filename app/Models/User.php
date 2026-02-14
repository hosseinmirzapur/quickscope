<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens;

    /** @use HasFactory<UserFactory> */
    use HasFactory;

    const SIGNUP_TYPES = ['EMAIL', 'WALLET'];

    public function wallets(): HasMany
    {
        return $this->hasMany(Wallet::class);
    }

    public function tiers(): BelongsToMany
    {
        return $this->belongsToMany(Tier::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}

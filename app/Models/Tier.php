<?php

namespace App\Models;

use Database\Factories\TierFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    /** @use HasFactory<TierFactory> */
    use HasFactory;
}

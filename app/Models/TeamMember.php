<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamMember extends Model
{
    public function phones(): HasMany
    {
        return $this->HasMany(Phone::class);
    }

    public function emails(): HasMany
    {
        return $this->HasMany(Email::class);
    }
}

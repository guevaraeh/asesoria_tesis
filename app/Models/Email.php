<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Email extends Model
{
    public function team_member(): BelongsTo
    {
        return $this->belongsTo(TeamMember::class, 'team_member_id');
    }
}

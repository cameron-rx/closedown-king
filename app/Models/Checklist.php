<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Checklist extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function groups(): HasMany
    {
        return $this->HasMany(ChecklistSection::class);
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

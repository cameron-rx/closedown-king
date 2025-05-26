<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChecklistSection extends Model
{
    //
    protected $fillable = ['name', 'position', 'checklist_id'];

    public function checklist(): BelongsTo
    {
        return $this->belongsTo(Checklist::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(ChecklistItem::class);
    }
}

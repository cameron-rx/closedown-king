<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChecklistItem extends Model
{
    //
    protected $fillable = ['name', 'position', 'checklist_section_id', 'is_complete'];

    public function section(): BelongsTo
    {
        return $this->belongsTo(ChecklistSection::class);
    }
}

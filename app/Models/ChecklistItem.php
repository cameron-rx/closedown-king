<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChecklistItem extends Model
{
    //
    protected $fillable = ['name', 'position', 'checklist_item_group_id', 'is_complete'];

    public function group(): BelongsTo
    {
        return $this->belongsTo(ChecklistItemGroup::class);
    }
}

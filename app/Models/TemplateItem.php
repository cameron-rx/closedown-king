<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TemplateItem extends Model
{
    protected $fillable = ['name', 'position', 'template_item_group_id'];
    //
    public function group(): BelongsTo
    {
        return $this->belongsTo(TemplateSection::class);
    }
}

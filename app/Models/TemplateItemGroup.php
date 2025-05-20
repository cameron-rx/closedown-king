<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TemplateItemGroup extends Model
{
    //
    protected $fillable = ['name', 'position', 'template_id'];

    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(TemplateItem::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TemplateItem extends Model
{
    protected $fillable = ['name'];
    //
    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }
}

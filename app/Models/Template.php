<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Template extends Model
{
    //
    protected $fillable = ['name'];

    public function items(): HasMany
    {
        return $this->HasMany(TemplateItem::class);
    }
}

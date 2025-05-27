<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Checklist extends Model
{
    protected $fillable = ['name', 'user_id', 'is_complete'];
    protected $casts = [
        'is_complete' => 'boolean', 
    ];

    public function sections(): HasMany
    {
        return $this->HasMany(ChecklistSection::class);
    }

    // Can be used to directly access items for a checklist
    public function items(): HasManyThrough
    {
        return $this->hasManyThrough(
            ChecklistItem::class,      
            ChecklistSection::class,    
            'checklist_id',   
            'checklist_section_id',      
            'id',             
            'id'              
        );
    }

}

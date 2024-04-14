<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the chapter that owns the question.
     */
    public function chapter(): BelongsTo
    {
        return $this->belongsTo(Chapter::class);
    }

    /**
     * Get the answers for the question.
     */
    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }
}

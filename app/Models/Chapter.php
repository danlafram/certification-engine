<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chapter extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the app that owns the chapter.
     */
    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class);
    }

     /**
     * Get the question for the chapter.
     */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}

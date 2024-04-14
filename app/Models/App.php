<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class App extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the chapters for the app.
     */
    public function chapters(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }
}

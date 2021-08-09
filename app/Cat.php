<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $data)
 * @method static findOrFail(mixed $id)
 */
class Cat extends Model
{
    protected $guarded = ['id'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }
}

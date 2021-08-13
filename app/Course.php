<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static select(string $string, string $string1, string $string2, string $string3, string $string4)
 */
class Course extends Model
{
    protected $guarded = ['id'];

    public function cat(): BelongsTo
    {
        return $this->belongsTo(Cat::class);
    }

    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class);
    }
}

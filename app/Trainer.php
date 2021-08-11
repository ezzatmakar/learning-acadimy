<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static create(array $data)
 * @method static findOrFail($trainer_id)
 */
class Trainer extends Model
{
    protected $guarded = ['id'];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static create(array $array)
 * @method static findOrFail(mixed $id)
 */
class Student extends Model
{
    protected $guarded = ['id'];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany('App\Course')->withPivot('status');
    }
}

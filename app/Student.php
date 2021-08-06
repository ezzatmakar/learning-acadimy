<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static create(array $array)
 */
class Student extends Model
{
    protected $guarded = ['id'];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany('App\Course');
    }
}

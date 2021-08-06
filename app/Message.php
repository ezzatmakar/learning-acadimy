<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $m_data)
 */
class Message extends Model
{
    protected $guarded = ['id'];
}
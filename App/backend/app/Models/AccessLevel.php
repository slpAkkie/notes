<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @property int|string|null id
 * @property string title
 * @property bool readonly
 * @property int created_at
 * @property int updated_at
 *
 * @mixin Builder
 */
class AccessLevel extends Model
{
    use HasFactory;
}

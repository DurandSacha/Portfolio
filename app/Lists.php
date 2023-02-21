<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Mails
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $lang
 * @property string $origin
 *  * @property string $tags
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $last_send
 * @mixin \Eloquent
 */
class Lists extends Model
{

    protected $fillable = [
        'name', 'description', 'lang', 'origin', 'created_at', 'updated_at', 'tags'
    ];
}

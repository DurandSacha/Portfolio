<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Mails
 *
 * @property int $id
 * @property int $list_id
 * @property string $email
 * @property string $tags
 * @property string $blacklisted
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $last_send
 * @mixin \Eloquent
 */
class Mails extends Model
{

    protected $fillable = [
        'email', 'list_id', 'tags', 'blacklisted', 'created_at', 'updated_at', 'last_send'
    ];


    //TODO: list relation
    /*
	public function agency(): BelongsTo
	{
		return $this->belongsTo(Agency::class);
	}
    */
}

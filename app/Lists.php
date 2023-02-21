<?php

namespace App;

use Carbon\Carbon;
use App\Mails;
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

    public function getEmailNumber(){
        return count(Mails::where('list_id', $this->id)->get());
    }

    public function getEmailFromList(){
        return Mails::where('list_id', $this->id)->get();
    }

    public function getEmailWithNotSendSince20Days(){
        $dateLimite = Carbon::now()->subDays(20);
        return Mails::where('list_id', $this->id)
                ->where('last_send', '<', $dateLimite)
                ->get();
    }
}

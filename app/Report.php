<?php

namespace App;

use App\Events\Reported;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'url', 'reason',
    ];

    protected $events = [
        'created' => Reported::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Lottery extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];

    public function lottery_tickets()
    {
        return $this->hasMany(LotteryTicket::class);
    }

}

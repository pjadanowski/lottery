<?php

namespace App;

use App\Traits\HasLottery;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class LotteryTicket extends Model
{
    use HasLottery;

    public function lottery()
    {
        return $this->belongsTo(Lottery::class);
    }


    public function scopeByLotterySlug(Builder $query, $lotterySlug, $notOlderThan = null)
    {
        return $query->where(self::ticketsByLotterySlug($lotterySlug, $notOlderThan));
    }
}

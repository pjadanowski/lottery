<?php


namespace App\Traits;


use Illuminate\Database\Eloquent\Builder;

trait HasLottery
{

    /**
     * @param $lotterySlug
     * @param null $notOlderThan
     * @return \Closure
     */
    public function ticketsByLotterySlug($lotterySlug, $notOlderThan = null)
    {
        return function (Builder $query) use ($lotterySlug, $notOlderThan) {

            $query->whereHas('lottery', function (Builder $q) use ($lotterySlug, $notOlderThan) {
                $q->whereSlug($lotterySlug);
            })
                ->where('created_at', '>=', $notOlderThan ?? now()->subMonth());
        };


    }
}

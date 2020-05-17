<?php

namespace App\Http\Controllers;

use App\Lottery;
use App\LotteryTicket;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function second()
    {
        $lottery = Lottery::first();
        $ticketsLastMonth = LotteryTicket::byLotterySlug($lottery->slug)->latest()->get();
        $ticketsLastTenMonths = LotteryTicket::byLotterySlug($lottery->slug, now()->subMonths(20))->latest()->get();

        return view('second', compact('ticketsLastMonth', 'ticketsLastTenMonths'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Classes\ExchangeAPI;
use App\Http\Controllers\Controller;
use App\Models\Bot;
use App\Models\Cashouts;
use App\Models\Exchanger;
use App\Models\Invests;
use App\Models\Messages;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show Admin Dashboard.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pCashoutsCount = Cashouts::countPendingDeposits();
        $pCashoutsSum = Cashouts::sumPendingDeposits();
        $cashoutsCount = Cashouts::countDeposits();
        $cashoutsSum = Cashouts::sumDeposits();
        $cashoutsCountToday = Cashouts::countDepositsToday();
        $cashoutsSumToday = Cashouts::sumDepositsToday();

        $countTotalMembers = User::countTotalMembers();
        $countTotalMembersToday = User::countTotalMembersToday();

        $purchasesCount = Invests::countTotalPurchases();
        $purchasesSum = Invests::sumTotalPurchases();
        $purchasesCountToday = Invests::countTotalPurchasesToday();
        $purchasesSumToday = Invests::sumTotalPurchasesToday();

        $balancesTotal = User::sumTotalMembersBalances();
        $pointsTotal = User::sumTotalMembersPoints();

        $totalOpenTickets = Messages::where(['is_archived'=> 0, 'is_support'=> 1, 'is_answer'=>0])->whereNull('related_message')->count();

        return view('app.admin.home',compact(
            'pCashoutsCount',
            'pCashoutsSum',
            'cashoutsCount',
            'cashoutsSum',
            'cashoutsCountToday',
            'cashoutsSumToday',
            'countTotalMembers',
            'countTotalMembersToday',
            'purchasesCount',
            'purchasesSum',
            'purchasesCountToday',
            'purchasesSumToday',
            'balancesTotal',
            'pointsTotal',
            'totalOpenTickets'
        ));
    }

    public function teste()
    {
        $user = User::find(15);
        $exchange = Exchanger::find(1);
        $exchangeAPI = new ExchangeAPI($user, $exchange);
        $bot = Bot::find(2);

        //  $isValid = $exchangeAPI->validateAPI('ciFcOjCMoxZuz4DujbnM2hIuGf1fdSJNBHzxMyE0nNnA9nnqSmXKpb8ZIh60iHRH','kbcXMpzuCKf8IhIztCQfPgITkESP4fVPw4HWrs495xrGsZzWWFY4uKEhoS9kJVA5');
        $balance = $exchangeAPI->validateBalance($bot);
        if (!$balance) {
            dd($exchangeAPI->errors);
        }


        $exchange_id = 'binance';
        $exchange_class = "\\ccxt\\$exchange_id";


        $exchange = new $exchange_class(array(
            'apiKey' => 'ciFcOjCMoxZuz4DujbnM2hIuGf1fdSJNBHzxMyE0nNnA9nnqSmXKpb8ZIh60iHRH',
            'secret' => 'kbcXMpzuCKf8IhIztCQfPgITkESP4fVPw4HWrs495xrGsZzWWFY4uKEhoS9kJVA5',
            'timeout' => 30000,
            'enableRateLimit' => true,
        ));

        try {
            $marquets = $exchange->fetch_balance();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        //
        //dd($marquets);

        return view('app.admin.home');
    }
}

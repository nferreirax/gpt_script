<?php

namespace App\Http\Controllers\Admin;

use App\Classes\ExchangeAPI;
use App\Http\Controllers\Controller;
use App\Models\Bot;
use App\Models\Cashouts;
use App\Models\Exchanger;
use App\Models\Invests;
use App\Models\Message;
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

        $countTotalMembers = User::countTotalMembers();
        $countTotalMembersToday = User::countTotalMembersToday();

        $balancesTotal = User::sumTotalMembersBalances();
        $pointsTotal = User::sumTotalMembersPoints();

        $totalOpenTickets = Message::where(['is_archived'=> 0, 'is_support'=> 1, 'is_answer'=>0])->whereNull('related_message')->count();

        return view('app.admin.home',compact(            
            'countTotalMembers',
            'countTotalMembersToday',          
            'balancesTotal',
            'pointsTotal',
            'totalOpenTickets'
        ));
    }

    
}

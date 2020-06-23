<?php

namespace App\Http\Controllers;

use App\Models\CreditDebit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $user = Auth::user();
    if($user->is_admin) {
        return redirect(route('admin.dashboard'));
    }
    $financialExtract = CreditDebit::where('user_id',$user->id)->get();
        return view('app.frontend.home',compact('financialExtract'));
    }
}

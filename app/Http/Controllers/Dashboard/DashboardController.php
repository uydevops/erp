<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function home()
    {
        $sessionInformation=session('user');
        return view('dashboard.home',compact('sessionInformation'));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('index');
    }

}

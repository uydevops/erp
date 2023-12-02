<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function home()
    {
        $userInformation=session('user');
        return view('dashboard.home',compact('userInformation'));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('user');
        return redirect()->route('index');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Blockip;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
       
        $user = User::where('name', $username)->first(); //kullanıcı adı ile kullanıcı bulunur.

        if ($user && $this->authenticate($user, $password)) { //authenticate fonksiyonu ile kullanıcı adı ve şifre kontrolü yapılır.
            $request->session()->regenerate(); //session güvenliği için regenerate kullanılır.
            return redirect()->intended('dashboard'); //intended ile kullanıcı giriş yapmak istediği sayfaya yönlendirilir.
        }

        return redirect()->back()->with('error', 'Kullanıcı adı veya şifre hatalı');
    }

    protected function authenticate($user, $password)
    {
        if (auth()->attempt(['name' => $user->name, 'password' => $password])) {
            return true;
        }
        return false;
    }
}

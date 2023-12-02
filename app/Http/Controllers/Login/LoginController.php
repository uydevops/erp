<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    // Giriş sayfasını gösteren metod
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        try {
            $user = $this->authenticate($request->email, $request->password);

            // Kullanıcıyı oturumda sakla
            $this->setUserInSession($request, $user);

            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('index')->with('error', $e->getMessage());
        }
    }

    private function authenticate($email, $password)
    {
        // Veritabanından kullanıcıyı al
        $user = DB::table('users')->where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            return $user;
        }

        throw new \Exception('Kullanıcı adı veya şifre hatalı');
    }

    private function setUserInSession(Request $request, $user)
    {
        // Oturuma kullanıcıyı ekle
        $request->session()->put('user', $user);
    }
}

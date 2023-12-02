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

    // Kullanıcının giriş yapmaya çalıştığı metod
    public function login(Request $request)
    {
        try {
            // Kullanıcıyı doğrula
            $user = $this->authenticate($request->email, $request->password);

            // Kullanıcıyı oturumda sakla
            $this->setUserInSession($request, $user);

            // Ana sayfaya yönlendir
            return redirect()->route('home');
        } catch (\Exception $e) {
            // Hata durumunda giriş sayfasına hata ile birlikte yönlendir
            return redirect()->route('index')->with('error', $e->getMessage());
        }
    }

    // Kullanıcı doğrulama işlemini gerçekleştiren özel metod
    private function authenticate($email, $password)
    {
        // Veritabanından kullanıcıyı al
        $user = DB::table('users')->where('email', $email)->first();

        // Kullanıcı varsa ve şifre doğruysa kullanıcıyı döndür
        if ($user && Hash::check($password, $user->password)) {
            return $user;
        }

        // Kullanıcı adı veya şifre hatalıysa istisna fırlat
        throw new \Exception('Kullanıcı adı veya şifre hatalı');
    }

    // Kullanıcıyı oturumda saklayan özel metod
    private function setUserInSession(Request $request, $user)
    {
        // Oturuma kullanıcıyı ekle
        $request->session()->put('user', $user);
    }
}

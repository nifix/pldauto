<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function showLogin()
    {
        return view('Auth.login');
    }

    protected function processLogin(Request $postData)
    {
         if ($postData->isMethod('post')){

            $user   = $postData->input('username');
            $pwd    = $postData->input('password');

            $userdata = DB::table('users')
                            ->where('username', $user)
                            ->first();
            if (!empty($userdata))
            {
                if (!is_null($userdata->password) && (Hash::check($pwd, $userdata->password)))
                {
                    Auth::attempt(['username' => $user,'password' => $pwd]);
                    if (Auth::check()) {
                        return redirect()->route('home');
                    }
                } else {
                    return redirect()->route('login')->withErrors(['password' => 'Mot de passe incorrect']);                   
                }

            } else {
                return redirect()->route('login')->withErrors(['username' => 'Utilisateur introuvable']);
            }   
        }          
    }

    protected function logout()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('/home');
    }
}        


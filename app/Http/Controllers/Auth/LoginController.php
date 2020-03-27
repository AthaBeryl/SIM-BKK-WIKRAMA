<?php

namespace App\Http\Controllers\Auth;

use App\loginPicture;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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
    protected $username;
    protected function authenticated() {
        if (Auth::check()) {
            return redirect()->route('home');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->username = $this->findUsername();
    }

    public function findUsername(){
        $login = request()->input('login');
        $fieldType = filter_var($login,FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$fieldType=>$login]);
        return $fieldType;
    }
    public function username()
    {
        return $this->username;
    }
}

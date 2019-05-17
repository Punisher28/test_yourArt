<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    /*public function redirectTo(){

        // User role
        $role = Auth()->users()->role->role_id;

        // Check user role
        switch ($role) {
            case 'Manager':
                return '/admin';
                break;
            default:
                return '/home';
                break;
        }
    }*/
    protected $redirectTo;

    /*public function redirectS()
    {
        if (!Auth::check() || !Auth::user()->hasRole('admin')) {
            $redirectTo = '/home';

        } else {
            $redirectTo = '/admin';
        }

    }*/


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}

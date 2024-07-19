<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Services\Google2FAService;
use DB;
use Hash;

class AuthenticatedSessionController extends Controller
{
    protected $google2fa;

    public function __construct(Google2FAService $google2fa)
    {
        $this->google2fa = $google2fa;
    }
    
    protected function username()
    {
        return 'phone';
    }
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // dd(1);
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // $user = User::active()->where(['email' => $request->email])->first();
        // $password = $request->password;
        // if(Hash::check($password, $user->password)){
        //     if($user->is_enable_2fa == true && $request->otp==null){
                
        //         return view('auth.confirm_2fa', compact('user', 'password'));
        //     }
        // }

        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::HOME);
    }
    public function login_2fa(LoginRequest $request)
    {
        // dd($request->all());

        $user = User::active()->where(['email' => $request->email])->first();
        
        if(Hash::check($request->password, $user->password)){
            $secret = $user->google2fa_secret;
            $oneTimePassword = $request->input('otp');
            if ($this->google2fa->verifyKey($secret, $oneTimePassword)) {
                $request->authenticate();
                $request->session()->regenerate();
                return redirect()->intended(RouteServiceProvider::HOME);
            }

        }
        return redirect()->back()->with('error', 'Otp không hợp lệ. Vui lòng nhập lại!');

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/cms');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuhtentificateRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthentificController extends Controller
{
    public function login(){
        $this->middleware('guest');
        if(Auth::check() && Auth::user()->role_id==2) return redirect()->route('dashboard');
        else if(Auth::check() && Auth::user()->role_id == 1) return redirect()->route('main');
        else return view('auth.login');
    }
    public function register(){
        $this->middleware('guest');
        if(Auth::check() && Auth::user()->role_id==2) return redirect()->route('dashboard');
        else if(Auth::check() && Auth::user()->role_id == 1) return redirect()->route('main');
        else return view('auth.register');
    }
    public function authenticate(AuhtentificateRequest $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            if(Auth::user()->role_id==1)
                return redirect()->intended('cabinet');
            else if(Auth::user()->role_id==2)
                return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Неверный пароль или логин',
        ]);
    }
    public function logout(AuhtentificateRequest $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function store(StoreUserRequest $request)
    {
        User::create(['name'=>$request->name,'email' => $request->email, 'password' => Hash::make($request->password),'role_id' => $request->role_id]);
        return redirect()->route('main')->with('success','Вы успешно прошли регистрацию');
    }
}

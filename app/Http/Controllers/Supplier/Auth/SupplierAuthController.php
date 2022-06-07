<?php

namespace App\Http\Controllers\Supplier\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Supplier;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SupplierAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        Auth::guard('supplier')->logout();
    }

    public function index()
    {
        // dd('x');
        if (Auth::guard('supplier')->check()) {
            return redirect()->route('supplier');
        } else {
            return view('supplier.login.index');
        }
    }

    /**
     * Handle an incoming admin authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'username' => 'required',
        //     // 'phone' => 'required|unique:users',
        //     'password' => 'required',
        // ]);
        // dd($this,$request);
        if(auth()->guard('supplier')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = auth()->user();
            dd($user);
            // return redirect()->intended(url('supplier'));
        } else {
            // dd('');
            return redirect()->back()->withErrors([
                'username' => 'Snap! you are done!'
            ]);
        }
    }

    public function logout()
    {
        Auth::guard('supplier')->logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }

    public function register(){

    }

    protected function credentials(Request $request){

        if(is_numeric($request->get('email'))){
            return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
        }
        elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
            return ['email' => $request->get('email'), 'password'=>$request->get('password')];
        }
        return ['username' => $request->get('email'), 'password'=>$request->get('password')];
    }
}

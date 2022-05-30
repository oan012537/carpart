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
    public function index()
    {
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
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        dd($this,$request);
        if(auth()->guard('supplier')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = auth()->user();
            dd($user);
            // return redirect()->intended(url('supplier'));
        } else {
            return redirect()->back()->withError('Credentials doesn\'t match.');
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
}

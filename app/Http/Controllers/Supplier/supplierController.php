<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserSupplier;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 


class SupplierController extends Controller
{
    public function index()    
    {
        
        // return view('supplier.auth.login');
    }

    public function login(Request $request)
    {
        $check = $request->all();

        if(Auth::guard('supplier')->attempt(['email' => $check['email'], 'password' => $check['password']  ])){
            return redirect()->route('supplier.profile')->with('error','Supplier Login Successfully');
        }else{
            return back()->with('error','Invaild Email Or Password');
        }
    }

    public function logout()
    {
        Auth::guard('supplier')->logout();
        return redirect()->route('supplier.login')->with('error','Supplier Logout Successfully');
    } 

    public function register()
    {
        return view('supplier.auth.register-pdpa');
    }

        public function store(Request $request)
        {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user = UserSupplier::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => '0986948341',
                'role_id' => 1,
                'is_active' => 1
            ]);

            return redirect()->route('suppplier.login')->with('error','Supplier Created Successfully');
        }


}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\Events\Registered;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BackendController extends Controller
{
    public function index(){
        return view('backend.login.index');
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',   // required and email format validation
            'password' => 'required', // required and number field validation

        ]);
        // dd($request->all(),$validator);
        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return response()->json($validator->errors(),422);  
            // validation failed return with 422 status

        } else {
            //validations are passed try login using laravel auth attemp
            // $credentials = $request->only('email', 'password');
            // dd(Auth::attempt($request->only(["email", "password"])));
            if (Auth::attempt($request->only(["email", "password"]))) {
                return response()->json(["status"=>true,"redirect_location"=>url("backend/dashboard")]);
                
            } else {
                return response()->json([["Invalid credentials"]],422);
                
            }
        }

        // dd($request);
        $request->authenticate();

        $request->session()->regenerate();

        return redirect('backend/dashboard');
    }

    public function register(){
        return view('backend.login.add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'status' => '1',
            'role' => '10',
            'email' => $request->email,
            'password' => Hash::make('12345678'),
        ]);
        // dd($user);

        event(new Registered($user));

        Auth::login($user);

        return redirect('backend/dashboard');
    }
}

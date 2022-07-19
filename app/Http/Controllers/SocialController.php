<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;
use App\Models\Buyer\mUsers_buyer;
use Illuminate\Support\Facades\Hash;

class SocialController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try {
     
            $user = Socialite::driver('google')->user();
            // dd($user);
            $finduser = mUsers_buyer::where('social_id', $user->id)->first();
      
            if($finduser){
      
                Auth::login($finduser);
     
                return redirect('/home');
      
            }else{
                // $newUser = User::create([
                //     'name' => $user->name,
                //     'email' => $user->email,
                //     'social_id'=> $user->id,
                //     'social_type'=> 'google',
                //     'password' => Hash::make('Ymd')
                // ]);

                $newUser = mUsers_buyer::create([
                    'profile_name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'password' => Hash::make('Ymd')
                ]);
                
                Auth::login($newUser);
      
                return redirect('/home');
            }
     
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}

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
    public function facebook_redirect(){
        return Socialite::with('facebook')->redirect();
    }

    public function handleFacebookCallback(Request $request){
        if($request->error == "access_denied"){
            return redirect("/login");
        }else{
            try {
        
                $users = Socialite::driver('facebook')->stateless()->user();
                dd($users);
                
                $finduser = mUsers_buyer::where('social_id', $users->id)->where('social_type','facebook')->first();
        
                if($finduser){
                    Auth::login($finduser);
        
                    return redirect('/home-search');
                }else{
                    $check_mail = mUsers_buyer::where('email',$users->email)->first();
                    if(!empty($check_mail)){
                        dd('มี email อยู่แล้ว');
                    }else{
                        $newUser = mUsers_buyer::create([
                            'code' => 'B1',date('Ymd'),
                            'profile_name' => $users->name,
                            'email' => $users->email,
                            'social_id'=> $users->id,
                            'social_type'=> 'facebook',
                            'password' => Hash::make('Ymd')
                        ]);
                        
                        Auth::login($newUser);
            
                        return redirect('/home-seach');
                    }
                    
                }
        
            } catch (Exception $e) {
                dd($e->getMessage());
            }
        }
        
    }
}

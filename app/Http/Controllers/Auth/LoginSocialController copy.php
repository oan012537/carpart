<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\Buyer\mUsers_buyer;

class LoginSocialController extends Controller
{
    //All providers login
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    //All providers callback
    public function handleProviderCallback($provider)
    {
        $data= Socialite::driver($provider)->user();
        // print_r($user);
        $this->_registerOrLoginUser($data, $provider);
        // Return home after login
        return redirect()->intended();
    }

    //Register or Login
    protected function _registerOrLoginUser($data, $provider)
    {
        //GET USER 
        switch($provider){
            case 'facebook' : $provider_type = 'social_facebookid';
                break;
            case 'google' : $provider_type = 'social_googleid';
                break;
            case 'line' : $provider_type = 'social_lineid';
                break;   
        }

        $user_buyer_id = "";
        if(!is_null(Auth::guard('buyer')->user())){
            $user_buyer_id = Auth::guard('buyer')->user()->id;
            $user = mUsers_buyer::where('id', $user_buyer_id)->first();
        }
        
        

        if($user){
            
            mUsers_buyer::where('id', $user->id)
            ->update([
                $provider_type => $data->id,
            ]);
        }
        
        //Create if not exists
        // if (!$user) {
        //     //CREATE NEW USER
        //     $user = new mUsers_buyer();
        //     $user->profile_name = $data->name;
        //     $user->social_id = $data->id;
        //     $user->social_type = $provider;
        //     $user->email = empty($data->email)?"":$data->email;

        //     $user->save();
        // }
        
        //LOGIN by object user
        Auth::login($user);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;


class cFunction extends Controller
{
    public function language()
    {
        return Session('lang');
    }
    public function setLang(Request $request)
	{
		$lang = Session::get('lang');
        $referrer =  $request->headers->get('referer');
        Session::put('lang',$request->lang);
        $newReferer = str_replace('/'.$lang,'/'.$request->lang, $referrer);
        
        return redirect()->intended($newReferer);
	}
}

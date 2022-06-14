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
use Response;
use Session;

class SupplierAuthController extends Controller
{
    public function __construct()
    {
        // dd('1');
        // $this->middleware('guest')->except('logout');
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
        // dd($this->getotp());
        // dd($request->all());
        $this->validate($request, [
            'username' => 'required',
            // 'phone' => 'required|unique:users',
            'password' => 'required',
        ]);
        $user = auth('supplier');
        // dd(Auth::guard('supplier')->check(),$request->all());
        if (Auth::guard('supplier')->attempt(['email' => $request->username, 'password' => $request->password, 'active' => '1']) ){ // loginเลย
            return redirect()->route('supplier.login.verify.phone');
            // return redirect()->intended(url('supplier'));
        } else {
            // dd('');
            return redirect()->back()->withErrors([
                'username' => 'Snap! you are done!'
            ]);
        }
    }
    public function verifyphone(Request $request)
    {
        // dd($request->all());
        $gettokenotp = $this->gettokenotp($request->number);
        // dd($gettokenotp);
        return view('supplier.regisotp-sup',['tokenotp'=>$gettokenotp]);
    }
    public function verifyotp(Request $request)
    {
        // dd();
        $gettokenotp = $this->otpcode($request->tokens,$request->otpcode);
        
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

    public function getotp($token,$otpcode){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/otp-validate',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "api_key:a8c6eba12ba2326f25fe706b94293fe0",
                "secret_key:SCFmYT1IgPXJT4nr",
            ),
            CURLOPT_POSTFIELDS =>json_encode(array(
            "token"=>$token,
            "otp_code"=>$otpcode,
            )),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        // echo $response;
        $response = json_decode($response,true);
        return Response::json($response);
    }

    public function gettokenotp($number){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/otp-send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
                "api_key:a8c6eba12ba2326f25fe706b94293fe0",
                "secret_key:SCFmYT1IgPXJT4nr",
            ),
            CURLOPT_POSTFIELDS =>json_encode(array(
            "project_key"=>"9b9279e805",
            "phone"=>$number,
            )),
        ));
        $response = curl_exec($curl);
        $info = curl_getinfo($curl);
        // echo $info["http_code"];
        curl_close($curl);
        // echo $response;
        //เพิ่มเอง
        $response = json_decode($response,true);
        if($info["http_code"] == '200'){
            return $response['result']['token'];
        }
        //เพิ่มเอง
        
    }
}

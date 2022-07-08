<?php

namespace App\Http\Controllers\Supplier\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Supplier;
use App\Models\UserSupplier;
<<<<<<< HEAD
use App\Models\Store;
=======
>>>>>>> b408f0eb681a2d6473f994150ab25ba955704986
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Response;
use Session;

class SupplierAuthController extends Controller
{
    // show login page
    public function index()
    {
        return view('supplier.auth.login');
    }

    // login
    public function login(Request $request)
    {
        $check = $request->all();

        if(Auth::guard('supplier')->attempt(['email' => $check['email'], 'password' => $check['password']  ])){
            return redirect()->route('supplier.profile')->with('message','Supplier Login Successfully');
        }else{
            return back()->with('message','Invaild Email Or Password');
        }
    }

    // logout
    public function logout()
    {
        Auth::guard('supplier')->logout();

        return redirect()->route('supplier.index')->with('message','Supplier Logout Successfully');
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

    // show register page
        public function register(){
            return view('supplier.auth.register-pdpa');
        }

        public function smsConfirm()
        {
            return view('supplier.auth.sms-confirm');
        }

        public function verifyOtp(Request $request)
        {
            $phone_number = $request->phone_number;

            return view('supplier.auth.verify-otp', compact('phone_number'));
        }

        public function supplierInfo()
        {
            $province_list_data = Province::select('id', 'name_th', 'name_en')->get();

            return view('supplier.auth.supplier-info', compact('province_list_data'));
        }

        public function getAddress(Request $request)
        {
            $id = $request->id;
            $type = $request->type;

            if ($type == 'amphure') {
                $amphure_list_data = Amphure::select('id', 'name_th', 'name_en')
                                            ->where('province_id', $id)
                                            ->get();
                return $amphure_list_data;
            }
            else if ($type == 'district') {
                $district_list_data = District::select('id', 'name_th', 'name_en', 'zip_code')
                                            ->where('amphure_id', $id)
                                            ->get();

                $zipcode_list_data = District::select('zip_code')
                                                ->where('amphure_id', $id)
                                                ->groupBy('zip_code')
                                                ->get();
                $data = [
                    'zip_code_list' => $zipcode_list_data,
                    'district_list' => $district_list_data
                ];
                
                return $data;
                
            }
        }

        public function contactInfo(Request $request)
        {
            $data = $request->except('company_certificate', 'vat_registration_doc', 'personal_card_id_image', 'personal_house_registration');

            $supplier_type = $data['supplier_type'];

            if ($supplier_type == 'personal') {
                $data['company_name'] = null;
                $data['branch'] = null;
                $data['vat_registration_number'] = null;
                $data['postcode'] = null;
                $data['company_cert_img_name'] = null;
                $data['vat_reg_doc_name'] = null;
            } else {
                $data['store_name'] = null;
                $data['personal_first_name'] = null;
                $data['personal_last_name'] = null;
                $data['personal_card_id'] = null;
                $data['personal_cardId_img_name'] = null;
                $data['personal_house_reg_name'] = null;
            }

            $company_certificate = $request->file('company_certificate');
            $vat_registration_doc = $request->file('vat_registration_doc');
            $personal_card_id_image = $request->file('personal_card_id_image');
            $personal_house_registration = $request->file('personal_house_registration');

            $company_cert_img_name = null;
            $vat_reg_doc_name = null;
            $personal_cardId_img_name  = null;
            $personal_house_reg_name = null;

            if ($company_certificate) {
                $imageName = time().'.'.$company_certificate->extension();
                $company_certificate->move(public_path('document/company/certificate'), $imageName);
                $company_cert_img_name = $imageName;
            }

            if ($vat_registration_doc) {
                $imageName = time().'.'.$vat_registration_doc->extension();
                $vat_registration_doc->move(public_path('document/company/vat-registration'), $imageName);
                $vat_reg_doc_name = $imageName;
            }

            if ($personal_card_id_image) {
                $imageName = time().'.'.$personal_card_id_image->extension();
                $personal_card_id_image->move(public_path('document/personal/id-card'), $imageName);
                $personal_cardId_img_name = $imageName;
            }

            if ($personal_house_registration) {
                $imageName = time().'.'.$personal_house_registration->extension();
                $personal_house_registration->move(public_path('document/personal/house-registration'), $imageName);
                $personal_house_reg_name = $imageName;
            }

            $amphureId = $data['amphure'];
            if ($amphureId) 
                $data['amphure'] = Amphure::where('id', $amphureId)->first()->name_th;

            $province_list_data = Province::select('id', 'name_th', 'name_en')->get();

            return view('supplier.auth.contact-info', compact('data', 'company_cert_img_name', 'vat_reg_doc_name', 'personal_cardId_img_name', 'personal_house_reg_name', 'province_list_data'));
        }

        public function bankInfo(Request $request)
        {
            $data = $request->all();

            $isDiffLocation = isset($data['is_different_location']) ? $data['is_different_location'] : null;
            if ($isDiffLocation)
                $data['store_province'] = $data['province'];

            $bank_list_data = array (
                    [
                        'id' => 1,
                        'name' => 'กรุงไทย'
                    ],
                    [
                        'id' => 2,
                        'name' => 'กสิกร'
                    ],
                    [
                        'id' => 3,
                        'name' => 'กรุงเทพ'
                    ],
                    [
                        'id' => 4,
                        'name' => 'ไทยพาณิชย์'
                    ]
            );

            $bank_branch_data = array (
                    [
                        'id' => 1,
                        'name' => 'ประชาอุทิศ'
                    ],
                    [
                        'id' => 2,
                        'name' => 'พญาไท'
                    ],
                    [
                        'id' => 3,
                        'name' => 'เทเวศน์'
                    ],
                    [
                        'id' => 4,
                        'name' => 'บางซื่อ'
                    ]
            );

            $bank_type_data = array (
                [
                    'id' => 1,
                    'name' => 'บัญชีเงินฝากกระแสรายวัน'
                ],
                [
                    'id' => 2,
                    'name' => 'บัญชีออมทรัพย์'
                ],
                [
                    'id' => 3,
                    'name' => 'บัญชีเงินฝากเงินตราต่างประเทศ'
                ],
                [
                    'id' => 4,
                    'name' => 'บัญชีฝากประจํา'
                ]
            );

            return view('supplier.auth.bank-info', compact('bank_list_data', 'bank_branch_data', 'bank_type_data', 'data'));
        }

        public function verifyphone(Request $request)
        {
            
            $gettokenotp = $this->gettokenotp($request->number);
            
            return view('supplier.regisotp-sup',['tokenotp'=>$gettokenotp]);
        }
    // show register page

    // public function verifyotp(Request $request)
    // {
    //     $gettokenotp = $this->otpcode($request->tokens,$request->otpcode);
        
    // }

    public function store(Request $request)
    {
        $data = $request->all();

        // $data->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:191', 'unique:user_supplliers'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $supplier_type = $data['supplier_type'];

        if ($supplier_type == 'personal') {
            $user_name = $data['personal_first_name'];
        } else {
            $user_name = $data['company_name'];
        }
        

        $user = UserSupplier::create([
            'name' => $user_name,
            'email' => $data['email'],
            'password' => Hash::make('12345678'),
            'phone' => $data['phone'],
            'role_id' => 1,
            'is_active' => 0
        ]);
        
        
        $data['user_id'] = $user->id;
        $data['status_code'] = 'request_approval';
        $data['is_active'] = 0;
        $data['created_by'] = $user_name;
        $data['updated_by'] = $user_name;

        $supplier_data = Supplier::create($data);

        $store_data = Store::create([
            'supplier_id' => $supplier_data->id,
            'store_name' => $data['store_name'],
            'address' => $data['store_address'],
            'province' => $data['store_province'],
            'amphure' => $data['store_district'],
            'district' => $data['store_district'],
            'postcode' => $data['store_postcode'],
            'googlemap' => $data['google_map_url'],
            'is_active' => 0,
            'created_by' => $user_name,
            'created_by' => $user_name
        ]);
        
        return 'success';

        // return redirect()->route('suppplier.login')->with('message','Supplier Created Successfully');
    }

    public function uploadFile(Request $request)
    {
        $image = $request->file('file');
    
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('suppliers/document/'), $imageName);
    
        return $imageName;
    }

    public function removeFile(Request $request)
    {
        $imageName = $request->imageName;
        
        unlink('suppliers/document/'. $imageName);

        return 'success';
    }


}

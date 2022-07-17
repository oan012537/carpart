<?php

namespace App\Http\Controllers\Supplier\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Supplier;
use App\Models\UserSupplier;
use App\Models\Store;
use App\Models\Province;
use App\Models\Amphure;
use App\Models\District;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Response;
use Session;
use Validator;

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

        if(Auth::guard('supplier')->attempt(['email' => $check['email'], 'password' => $check['password']  ])) {

            return redirect()->route('supplier.profile')->with('message','Supplier Login Successfully');
        }else{

            return back()->with('error','Invaild Email Or Password');
            
        }
        
    }

    // logout
    public function logout()
    {
        Auth::guard('supplier')->logout();

        return redirect()->route('supplier.index')->with('message','Supplier Logout Successfully');
    }


    // protected function credentials(Request $request){

    //     if(is_numeric($request->get('email'))){
    //         return ['phone'=>$request->get('email'),'password'=>$request->get('password')];
    //     }
    //     elseif (filter_var($request->get('email'), FILTER_VALIDATE_EMAIL)) {
    //         return ['email' => $request->get('email'), 'password'=>$request->get('password')];
    //     }
    //     return ['username' => $request->get('email'), 'password'=>$request->get('password')];
    // }


    // load register page
    public function register()
    {
        return view('supplier.auth.register-pdpa');
    }

    // confirm sms
    public function smsConfirm()
    {
        return view('supplier.auth.sms-confirm');
    }

    // verify OTP
    public function verifyOtp(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'phone' => ['required', 'max:10', 'min:10', 'unique:user_suppliers']
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $phone = $request->phone;

        // Support version greater than or equal 7.X.X 
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/otp-send',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_HTTPHEADER => array(
        //         "Content-Type: application/json",
        //         "api_key:a8c6eba12ba2326f25fe706b94293fe0",
        //         "secret_key:SCFmYT1IgPXJT4nr",
        //     ),
        //     CURLOPT_POSTFIELDS =>json_encode(array(
        //     "project_key" => "9b9279e805",
        //     "phone" => $phone
        //     )),
        // ));

        // $response = json_decode(curl_exec($curl));
        // curl_close($curl);
        // $code = $response->code;

        // if ($code == '000') {
        //     $token = $response->result->token;
        // } else {
        //     $detail = $response->detail;
        // }
        
        $token = 'test';
        return view('supplier.auth.verify-otp', compact('phone', 'token'));
    }


    // request OTP
    public function requestOtp(Request $request)
    {
        $phone = $request->phone;

        // Support version greater than or equal 7.X.X 
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/otp-send',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_HTTPHEADER => array(
        //         "Content-Type: application/json",
        //         "api_key:a8c6eba12ba2326f25fe706b94293fe0",
        //         "secret_key:SCFmYT1IgPXJT4nr",
        //     ),
        //     CURLOPT_POSTFIELDS =>json_encode(array(
        //     "project_key" => "9b9279e805",
        //     "phone" => $phone
        //     )),
        // ));

        // $response = json_decode(curl_exec($curl));
        // curl_close($curl);
        // $code = $response->code;

        // if ($code == '000') {
        //     $token = $response->result->token;
        // } else {
        //     $detail = $response->detail;
        // }
        
        $token = 'resend';

        return $token;
    }

    // confirm otp
    public function confirmOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'otp_digit.*' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $token = $request->token;
        $otp_code_array = $request->otp_digit;

        $otp_code = null;
        if ($otp_code_array[0] != null) {
            foreach ($otp_code_array as $key => $otp) {
                $otp_code .= $otp;
            }
        } else {
            return redirect()->back();  
        }

        //Support version greater than or equal 7.X.X 
        // $curl = curl_init();
        // curl_setopt_array($curl, array(
        //     CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/otp-validate',
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => true,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'POST',
        //     CURLOPT_HTTPHEADER => array(
        //         "Content-Type: application/json",
        //         "api_key:a8c6eba12ba2326f25fe706b94293fe0",
        //         "secret_key:SCFmYT1IgPXJT4nr",
        //     ),
        //     CURLOPT_POSTFIELDS =>json_encode(array(
        //     "token" => $token,
        //     "otp_code" => $otp_code
        //     )),
        // ));
        // $response = json_decode(curl_exec($curl));
        // curl_close($curl);
        
        $code = '000'; //$response->code;

        if ($code == '000') {
            return redirect()->route('supplier.register.supplierInfo');
        } else {
            return redirect()->back();
        }
    }

    // supplier info
    public function supplierInfo()
    {
        $province_list_data = Province::select('id', 'name_th', 'name_en')->get();

        return view('supplier.auth.supplier-info', compact('province_list_data'));
    }


    // get amphure, district, and postcode
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

    // contact info
    public function contactInfo(Request $request)
    {
        $data = $request->except('company_certificate', 'vat_registration_doc', 'personal_card_id_image', 'personal_house_registration');

        $supplier_type = $data['supplier_type'];

        if ($supplier_type == 'personal') {
            $data['company_name'] = null;
            $data['branch'] = null;
            $data['vat_registration_number'] = null;
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
            $data['amphure_name'] = Amphure::where('id', $amphureId)->first()->name_th;

        $districtId = $data['district'];
        if ($districtId) 
            $data['district_name'] = District::where('id', $districtId)->first()->name_th;

        $province_list_data = Province::select('id', 'name_th', 'name_en')->get();

        return view('supplier.auth.contact-info', compact('data', 'company_cert_img_name', 'vat_reg_doc_name', 'personal_cardId_img_name', 'personal_house_reg_name', 'province_list_data'));
    }

    // bank info
    public function bankInfo(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:191', 'unique:user_suppliers'],
            'phone' => ['required', 'max:10', 'min:10', 'unique:user_suppliers']
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($data['supplier_type'] == 'personal') {
            $data['contact_name'] = null;
            $data['contact_last_name'] = null;
        }

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


    // save user, user-supplier, and store
    public function store(Request $request)
    {
        $data = $request->all();

        $supplier_type = $data['supplier_type'];
        $store_name = null;
        if ($supplier_type == 'personal') {
            $store_name = $data['store_name'];
        } else {
            $store_name = $data['company_name'];
        }

        if ($supplier_type == 'personal') {
            $user_name = $data['personal_first_name'];
        } else {
            $user_name = $data['company_name'];
        }
        
        // create user_suppliers
        $user = UserSupplier::create([
            'name' => $user_name,
            'email' => $data['email'],
            'password' => Hash::make('12345678'),
            'phone' => $data['phone'],
            'role_id' => 1,
            'is_active' => 0
        ]);
        
        // assign other supplier value and create supplier
        $data['user_id'] = $user->id;
        $data['status_code'] = 'request_approval';
        $data['is_active'] = 0;
        $data['created_by'] = $user_name;
        $data['updated_by'] = $user_name;

        $supplier_data = Supplier::create($data);

        // create store
        $store_data = Store::create([
            'supplier_id' => $supplier_data->id,
            'store_name' => $store_name,
            'address' => $data['store_address'],
            'province' => $data['store_province'],
            'amphure' => $data['store_amphure'],
            'district' => $data['store_district'],
            'postcode' => $data['store_postcode'],
            'googlemap' => $data['google_map_url'],
            'is_active' => 0,
            'created_by' => $user_name,
            'created_by' => $user_name
        ]);

        $user_id = $user->id;
        
        return view('supplier.auth.create-password', compact('user_id'));

    }

    public function createPassword(Request $request)
    {
        $user_id = $request->user_id;

        return view('supplier.auth.create-password', compact('user_id'));
    }

    public function storePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|confirmed'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $id = $request->id;
        $password = $request->password;

         // update password
         $user = UserSupplier::find($id)->update([
    
            'password' => Hash::make($password)
     
        ]);

        
    }

    // upload file
    public function uploadFile(Request $request)
    {
        $image = $request->file('file');
    
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('suppliers/document/'), $imageName);
    
        return $imageName;
    }

    // remove file
    public function removeFile(Request $request)
    {
        $imageName = $request->imageName;
        
        unlink('suppliers/document/'. $imageName);

        return 'success';
    }


}

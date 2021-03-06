<?php

namespace App\Http\Controllers\Buyer\Myaccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Amphure;
use App\Models\District;
use App\Models\Province;
use App\Models\Buyer\mUsers_buyer;
use App\Models\Buyer\BuyerProfile;
use App\Models\Buyer\BuyerTaxInvoice;
use App\Models\Buyer\BuyerBank;


class BuyerProfileController extends Controller
{
    public function index()
    {
        $data['user_buyer'] = mUsers_buyer::where('id', Auth::guard('buyer')->user()->id)->first();

        $data['buyer_profiles'] = $this->fetch_BuyerProfile($data['user_buyer']->id);

        $data['address_profiles'] = $data['buyer_profiles']->where('is_profile', '1')->first();

        $data['buyer_tax_invoices'] = $this->fetch_BuyerTaxInvoice($data['user_buyer']->id);
        
        $data['buyer_banks'] = BuyerBank::where('users_buyer_id', $data['user_buyer']->id)
            ->orderBy('banks_active', 'desc')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();
        
        $data['provinces'] = Province::get();
        
        return view('buyer.profile.profile.index', $data);
    }

    public function fetch_BuyerProfile($id)
    {
        $buyer_profiles = BuyerProfile::where('users_buyer_id', $id)
            ->where('is_active','1')
            ->orderBy('is_profile', 'desc')
            ->orderBy('is_delivery', 'desc')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('userBuyer', 'Province', 'Amphure', 'District')
            ->get();

        return $buyer_profiles;
    }

    public function fetch_BuyerTaxInvoice($id)
    {
        $buyer_tax_invoices = BuyerTaxInvoice::where('users_buyer_id', $id)
            ->where('is_active','1')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('Province', 'Amphure', 'District')
            ->first();

        return $buyer_tax_invoices;
    }

    public function buyerprofile_edit($id)
    {
        $buyer_profiles = BuyerProfile::where('id', $id)
            ->with('userBuyer')
            ->first();

        $province = Province::get();
        $amphure = Amphure::where('province_id', $buyer_profiles->province)->get();
        $district = District::where('amphure_id', $buyer_profiles->amphure)->get();

        return response()->json([
            'status' => 200,
            'data' => $buyer_profiles,
            'province' => $province,
            'amphure' => $amphure,
            'district' => $district,
        ]);
    }

    public function buyerprofile_store(Request $request)
    {
        DB::beginTransaction();
        try {  
            $user_buyer_id = Auth::guard('buyer')->user()->id;
            BuyerProfile::create([
                'users_buyer_id' => $user_buyer_id,
                'first_name' => $request->first_name,
                'phone' => $request->phone,
                'address' => $request->address,
                'province' => $request->province,
                'amphure' => $request->amphure,
                'district' => $request->district,
                'postcode' => $request->postcode,
                'created_by' => $user_buyer_id,
                'updated_by' => $user_buyer_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $buyer_profiles = $this->fetch_BuyerProfile($user_buyer_id);
        $html_address = $this->htmlwrite($buyer_profiles);

        $address_profiles = $buyer_profiles->where('is_profile', '1')->first();
        if(!is_null($address_profiles)){
            $user_buyer = mUsers_buyer::where('id', $user_buyer_id)->first();
            $html_address_profiles = $this->buyer_accounthtmlwrite($address_profiles, $user_buyer);
        }else{
            $html_address_profiles = '<div class="box__content">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="head-address">
                                                        <p>
                                                            ???????????????????????????????????????
                                                        </p>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>';
        }

        return response()->json([
            'status' => 200,
            'message' => '??????????????????????????????????????????????????????',
            'data' => $buyer_profiles,
            'htmltext' => $html_address,
            'htmltext_account' => $html_address_profiles,
        ]);
    }

    public function buyerprofile_update(Request $request)
    {
        DB::beginTransaction();
        try {  
            $user_buyer_id = Auth::guard('buyer')->user()->id;
            BuyerProfile::where('id', $request->buyerprofile_id)
            ->update([
                'users_buyer_id' => $user_buyer_id,
                'first_name' => $request->first_name_edit,
                'phone' => $request->phone_edit,
                'address' => $request->address_edit,
                'province' => $request->province_edit,
                'amphure' => $request->amphure_edit,
                'district' => $request->district_edit,
                'postcode' => $request->postcode_edit,
                'updated_by' => $user_buyer_id,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $buyer_profiles = $this->fetch_BuyerProfile($user_buyer_id);
        $html_address = $this->htmlwrite($buyer_profiles);

        $address_profiles = $buyer_profiles->where('is_profile', '1')->first();
        $user_buyer = mUsers_buyer::where('id', $user_buyer_id)->first();
        $html_address_profiles = $this->buyer_accounthtmlwrite($address_profiles, $user_buyer);

        return response()->json([
            'status' => 200,
            'message' => '??????????????????????????????????????????????????????',
            'data' => $buyer_profiles,
            'htmltext' => $html_address,
            'htmltext_account' => $html_address_profiles,
        ]);
    }

    public function buyerprofile_delete($id)
    {
        DB::beginTransaction();
        try {  
            $user_buyer_id = Auth::guard('buyer')->user()->id;
            BuyerProfile::where('id', $id)
            ->update([
                'is_active' => '0',
                'updated_by' => $user_buyer_id,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $buyer_profiles = $this->fetch_BuyerProfile($user_buyer_id);
        if(!is_null($buyer_profiles)){
            $html_address = $this->htmlwrite($buyer_profiles);
        }else{
            $html_address = '';
        }
        $address_profiles = $buyer_profiles->where('is_profile', '1')->first();
        if(!is_null($address_profiles)){
            $user_buyer = mUsers_buyer::where('id', $user_buyer_id)->first();
            $html_address_profiles = $this->buyer_accounthtmlwrite($address_profiles, $user_buyer);
        }else{
            $html_address_profiles = '<div class="box__content">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="head-address">
                                                        <p>
                                                            ???????????????????????????????????????
                                                        </p>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>';
        }

        return response()->json([
            'status' => 200,
            'message' => '??????????????????????????????????????????????????????',
            'data' => $buyer_profiles,
            'htmltext' => $html_address,
            'htmltext_account' => $html_address_profiles,
        ]);
    }

    public function buyerprofile_set_isprofile($id)
    {
        $return_set = $this->setaddress_default('is_profile', $id);
        return $return_set;
    }

    public function buyerprofile_set_isdelivery($id)
    {
        $return_set = $this->setaddress_default('is_delivery', $id);
        return $return_set;
    }

    public function setaddress_default($column_name,$id)
    {
        DB::beginTransaction();
        try {  
            $user_buyer_id = Auth::guard('buyer')->user()->id;

            BuyerProfile::where('users_buyer_id', $user_buyer_id)->update([$column_name => '0']);

            BuyerProfile::where('id', $id)
            ->update([
                $column_name => '1',
                'updated_by' => $user_buyer_id,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $buyer_profiles = $this->fetch_BuyerProfile($user_buyer_id);
        if(!is_null($buyer_profiles)){
            $html_address = $this->htmlwrite($buyer_profiles);
        }else{
            $html_address = '';
        }
        $address_profiles = $buyer_profiles->where('is_profile', '1')->first();
        if(!is_null($address_profiles)){
            $user_buyer = mUsers_buyer::where('id', $user_buyer_id)->first();
            $html_address_profiles = $this->buyer_accounthtmlwrite($address_profiles, $user_buyer);
        }else{
            $html_address_profiles = '<div class="box__content">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="head-address">
                                                        <p>
                                                            ???????????????????????????????????????
                                                        </p>
                                                    </div>
                                                </div> 
                                            </div> 
                                        </div>';
        }

        return response()->json([
            'status' => 200,
            'message' => '??????????????????????????????????????????????????????',
            'data' => $buyer_profiles,
            'htmltext' => $html_address,
            'htmltext_account' => $html_address_profiles,
        ]);
    }

    public function htmlwrite($buyer_profiles)
    {
        $html = "";
        if(!is_null($buyer_profiles)){
            foreach($buyer_profiles as $key => $buyerprofile){
                    $profile_checked = "";
                    $delivery_checked = "";

                    if($buyerprofile->is_profile == 1){
                        $profile_checked = "checked";
                    }

                    if($buyerprofile->is_delivery == 1){
                        $delivery_checked = "checked";
                    }
                    $name_user = $buyerprofile->first_name." ".$buyerprofile->last_name;                                   
                    $name_user = (($name_user == "" || $name_user == null) ? '-' : $name_user);

                $html .= '<div class="box__content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="b-bank2"> ??????????????????????????????????????????????????????????????????
                                        <input type="radio" name="profile_checked" class="setaddress_profile" rel="'.$buyerprofile->id.'" '.$profile_checked.'>
                                        <span class="checkmark2"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label class="b-bank3"> ???????????????????????????????????????????????????????????????
                                        <input type="radio" name="delivery_checked" class="setaddress_delivery" rel="'.$buyerprofile->id.'" '.$delivery_checked.'>
                                        <span class="checkmark3"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ac-detail-text-tt2">
                                <a href="javascript:void(0)" onclick="model_buyerprofile_edit('.$buyerprofile->id.')">
                                    <p 
                                        class="w3-button w3-black"> <i class="fas fa-pen"
                                            style="font-size:18px"></i> &nbsp;
                                        ??????????????? </p>
                                </a>
                            </div>
                            <div class="ttext-delate">
                                <a href="javascript:void(0)" onclick="buyerprofile_delete('.$buyerprofile->id.')">
                                    <p> ?????? </p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="h-text-h">
                                <p>
                                    ????????????-?????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="detail-text-detail">
                                <p>
                                    '.$name_user.'
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="h-text-h">
                                <p>
                                    ????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="detail-text-detail">
                                <p>
                                    '.(is_null($buyerprofile->phone) ? '-' : $buyerprofile->phone).'
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="h-text-h">
                                <p>
                                    ???????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="detail-text-detail">
                                <p>
                                    '.(is_null($buyerprofile->userBuyer->email) ? '-' : $buyerprofile->userBuyer->email).'
                                </p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="h-text-h">
                                <p>
                                    ?????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="detail-text-detail">
                                <p>
                                    '.$buyerprofile->address.'
                                    '.(is_null($buyerprofile->District) ? '-' : $buyerprofile->District->name_th).'
                                    '.(is_null($buyerprofile->Amphure) ? '-' : $buyerprofile->Amphure->name_th).'
                                    '.(is_null($buyerprofile->Province) ? '-' : $buyerprofile->Province->name_th).'
                                    '.$buyerprofile->postcode.'
                                </p>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }

        return $html;
    }

    public function buyerprofile_account_update(Request $request)
    {
        DB::beginTransaction();
        try {  
            $user_buyer_id = Auth::guard('buyer')->user()->id;
            BuyerProfile::where('id', $request->buyerprofileaccount_id)
            ->update([
                'users_buyer_id' => $user_buyer_id,
                'first_name' => $request->account_first_name,
                'phone' => $request->account_phone,
                'address' => $request->account_address,
                'province' => $request->account_province,
                'amphure' => $request->account_amphure,
                'district' => $request->account_district,
                'postcode' => $request->account_postcode,
                'updated_by' => $user_buyer_id,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $buyer_profiles = $this->fetch_BuyerProfile($user_buyer_id);
        $html_address = $this->htmlwrite($buyer_profiles);

        $address_profiles = $buyer_profiles->where('is_profile', '1')->first();
        $user_buyer = mUsers_buyer::where('id', $user_buyer_id)->first();
        $html_address_profiles = $this->buyer_accounthtmlwrite($address_profiles, $user_buyer);

        return response()->json([
            'status' => 200,
            'message' => '??????????????????????????????????????????????????????',
            'data' => $address_profiles,
            'htmltext' => $html_address,
            'htmltext_account' => $html_address_profiles,
        ]);
    }

    public function buyer_accounthtmlwrite($address_profiles ,$user_buyer)
    {
        $name_user = $address_profiles->first_name." ".$address_profiles->last_name;    
        $name_user = ($name_user == "" || $name_user == null) ? '-' : $name_user ;                            
        $html = "";
        $html .= '<div class="box__content">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="head-address">
                                <p>
                                    ???????????????????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ac-detail-text-tt">
                                <a href="javascript:void(0);" id="btn_address_profiles_edit" onclick="model_buyerprofileaccount_edit('.$address_profiles->id.')">
                                    <p class="w3-button w3-black"> <i class="fas fa-pen"
                                            style="font-size:18px"></i> &nbsp;
                                        ??????????????? </p>
                                </a>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ?????????????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p>
                                    '.(is_null($user_buyer->profile_name) ? '-' : $user_buyer->profile_name).'
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ???????????????????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p id="text_account_first_name">
                                    '.$name_user.'
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ???????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p>
                                    '.(is_null($user_buyer->email) ? '-' : $user_buyer->email).'
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p id="text_account_phone">
                                    '.(is_null($address_profiles->phone) ? '-' : $address_profiles->phone).'
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ?????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p id="text_account_address">
                                    '.(is_null($address_profiles->address) ? '-' : $address_profiles->address).'
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ????????????/????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p id="text_account_district">
                                    '.(is_null($address_profiles->District) ? '-' : $address_profiles->District->name_th).'
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ?????????/???????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p id="text_account_amphure">
                                    '.(is_null($address_profiles->Amphure) ? '-' : $address_profiles->Amphure->name_th).'
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ?????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p id="text_account_province">
                                    '.(is_null($address_profiles->Province) ? '-' : $address_profiles->Province->name_th).'
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2">
                                <p>
                                    ????????????????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2">
                                <p id="text_account_postcode">
                                    '.(is_null($address_profiles->postcode) ? '-' : $address_profiles->postcode).'
                                </p>
                            </div>
                        </div>
                    </div> 

                </div>';

        return $html;
    }

    
    //== Tax Invoice 

    public function buyerprofile_taxinvoice_edit($id)
    {
        $buyer_taxinvoice = BuyerTaxInvoice::where('id', $id)
            ->with('userBuyer')
            ->first();

        $province = Province::get();
        $amphure = Amphure::where('province_id', $buyer_taxinvoice->province)->get();
        $district = District::where('amphure_id', $buyer_taxinvoice->amphure)->get();

        return response()->json([
            'status' => 200,
            'data' => $buyer_taxinvoice,
            'province' => $province,
            'amphure' => $amphure,
            'district' => $district,
        ]);
    }

    public function buyerprofile_taxinvoice_update(Request $request)
    {
        DB::beginTransaction();
        try {  
            $user_buyer_id = Auth::guard('buyer')->user()->id;

            if($request->tax_invoices_id == ""){
                BuyerTaxInvoice::create([
                    'users_buyer_id' => $user_buyer_id,
                    'name' => $request->tax_invoices_name,
                    'texid' => $request->tax_invoices_texid,
                    'phone' => $request->tax_invoices_phone,
                    'address' => $request->tax_invoices_address,
                    'province' => $request->tax_invoices_province,
                    'amphure' => $request->tax_invoices_amphure,
                    'district' => $request->tax_invoices_district,
                    'postcode' => $request->tax_invoices_postcode,
                    'created_by' => $user_buyer_id,
                    'updated_by' => $user_buyer_id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }else{
                BuyerTaxInvoice::where('id', $request->tax_invoices_id)
                ->update([
                    'users_buyer_id' => $user_buyer_id,
                    'name' => $request->tax_invoices_name,
                    'texid' => $request->tax_invoices_texid,
                    'phone' => $request->tax_invoices_phone,
                    'address' => $request->tax_invoices_address,
                    'province' => $request->tax_invoices_province,
                    'amphure' => $request->tax_invoices_amphure,
                    'district' => $request->tax_invoices_district,
                    'postcode' => $request->tax_invoices_postcode,
                    'updated_by' => $user_buyer_id,
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
            
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $buyer_tax_invoices = $this->fetch_BuyerTaxInvoice($user_buyer_id);
        
        return response()->json([
            'status' => 200,
            'data' => $buyer_tax_invoices,
        ]);
    }


    //== Change Password

    public function buyerprofile_check_currentpassword($current_password)
    {
        $user_buyer = mUsers_buyer::where('id', Auth::guard('buyer')->user()->id)->first();
        $phone = $user_buyer->phone;
        $password = $current_password;

        if(Auth::guard('buyer')->attempt(['phone' => $phone, 'password' => $password]) ){
            return response()->json([
                'status' => 200,
                'mobilenumber' => $phone,
                'message' => '???????????????????????????????????????????????? ?????????????????????????????????',
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => '??????????????????????????????????????????????????????????????????????????????',
            ]);
        }
        
    }

    //== SocialMedia

    public function buyerprofile_socialmedia_disconnect($provider)
    {
        switch($provider){
            case 'facebook' : $provider_type = 'social_facebookid';
                break;
            case 'google' : $provider_type = 'social_googleid';
                break;
            case 'line' : $provider_type = 'social_lineid';
                break;   
        }
        
        mUsers_buyer::where('id', Auth::guard('buyer')->user()->id)
            ->update([
                'social_lineid' => null,
            ]);

        return response()->json([
            'status' => 200,
            'provider' => $provider,
            'message' => '?????????????????????????????????????????????',
        ]);
    }




    //== Profile Bank
    
    public function buyerprofile_bank_request_otp()
    {
        $user_buyer = mUsers_buyer::where('id', Auth::guard('buyer')->user()->id)->first();
        $phone = $user_buyer->phone;
        return response()->json([
            'status' => 200,
            'mobilenumber' => $phone,
            'message' => '???????????????????????????????????????????????? ?????????????????????????????????',
        ]);
    }

    public function buyerprofile_bank_store(Request $request)
    {
        DB::beginTransaction();
        try {  

            $user_buyer_id = Auth::guard('buyer')->user()->id;

            $path = 'buyers/banks';
            $image = '';

            if ($request->file_banks_refimage != '') {
                if (!empty($request->file('file_banks_refimage'))) {
                    $img = $request->file('file_banks_refimage');
                    $img_name = time() . '.' . $img->getClientOriginalExtension();
                    $save_path = $img->move(public_path($path), $img_name);
                    $image = $img_name;
                }
            }

            BuyerBank::create([
                'users_buyer_id' => $user_buyer_id,
                'banks_accountnumber' => $request->banks_accountnumber, 
                'banks_accountname' => $request->banks_accountname, 
                'banks_name' => $request->banks_name, 
                'banks_branch' => $request->banks_branch, 
                'banks_type' => $request->banks_type, 
                'banks_refimage' => $image, 
                'created_by' => $user_buyer_id,
                'updated_by' => $user_buyer_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
        
        $buyer_banks = BuyerBank::where('users_buyer_id', $user_buyer_id)
            ->orderBy('banks_active', 'desc')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        $htmltext_banks = $this->buyer_bankhtmlwrite($buyer_banks);

        return response()->json([
            'status' => 200,
            'message' => "?????????????????????????????????????????????????????????",
            'htmltext_banks' => $htmltext_banks,
        ]);

    }

    public function buyerprofile_bank_set_default($id)
    {
        DB::beginTransaction();
        try {  
            $user_buyer_id = Auth::guard('buyer')->user()->id;

            BuyerBank::where('users_buyer_id', $user_buyer_id)->update(['banks_active' => '0']);

            BuyerBank::where('id', $id)
            ->update([
                'banks_active' => '1',
                'updated_by' => $user_buyer_id,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }

        $buyer_banks = BuyerBank::where('users_buyer_id', $user_buyer_id)
            ->orderBy('banks_active', 'desc')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->get();

        $htmltext_banks = $this->buyer_bankhtmlwrite($buyer_banks);

        //dd($buyer_banks, $htmltext_banks);

        return response()->json([
            'status' => 200,
            'message' => "?????????????????????????????????????????????????????????",
            'htmltext_banks' => $htmltext_banks,
        ]);
    }

    public function buyer_bankhtmlwrite($buyer_banks)
    {
        $html = "";
        if(!is_null($buyer_banks)){
            foreach($buyer_banks as $key => $bank){
                
                $bank_checked = "";
                if($bank->banks_active == 1){
                    $bank_checked = "checked";
                }

                $patch_image = asset('buyers/banks/'.$bank->banks_refimage);

                $html .= '<div class="box__content">
                    <div class="box-check-set">
                        <label class="b-bank"> ????????????????????????????????????????????????????????????
                            <input type="radio" name="bank_checked" class="bank_checked" rel="'.$bank->id.'" '.$bank_checked.'>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2-bank">
                                <p>
                                    ????????????????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2-bank">
                                <p>
                                    '.(is_null($bank->banks_accountnumber) ? '-' : $bank->banks_accountnumber).'
                                </p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2-bank">
                                <p>
                                    ???????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2-bank">
                                <p>
                                    '.(is_null($bank->banks_accountname) ? '-' : $bank->banks_accountname).'
                                </p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2-bank">
                                <p>
                                    ??????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2-bank">
                                <p>
                                    '.(is_null($bank->banks_name) ? '-' : $bank->banks_name).'
                                </p>
                            </div>
                        </div>
                    </div>
        
                    <!-- <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2-bank">
                                <p>
                                    ?????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2-bank">
                                <p>
                                    012345678
                                </p>
                            </div>
                        </div>
                    </div> -->
        
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2-bank">
                                <p>
                                    ????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2-bank">
                                <p>
                                    '.(is_null($bank->banks_branch) ? '-' : $bank->banks_branch).'
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2-bank">
                                <p>
                                    ?????????????????????????????????
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2-bank">
                                <p>
                                    '.(is_null($bank->banks_type) ? '-' : $bank->banks_type).'
                                </p>
                            </div>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="txt__title2-bank">
                                <p>
                                    ??????????????????????????? Book Bank
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="txt__detailtitle2-bank">
                                <img src="'.$patch_image.'" class="img-fluid" style="max-width:80px;"
                                    alt="Book Bank">
                            </div>
                        </div>
                    </div>
                </div>';

            }
        }

        return $html;
    }
    
}

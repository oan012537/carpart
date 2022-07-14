<?php

namespace App\Http\Controllers\Buyer;

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


class BuyerAccountController extends Controller
{
    public function index()
    {
        $data['user_buyer'] = mUsers_buyer::where('id', Auth::guard('buyer')->user()->id)->first();

        $data['buyer_profiles'] = $this->fetch_BuyerProfile($data['user_buyer']->id);

        $data['address_profiles'] = $data['buyer_profiles']->where('is_profile', '1')->first();

        $data['buyer_tax_invoices'] = BuyerTaxInvoice::where('users_buyer_id', $data['user_buyer']->id)
            ->where('is_active','1')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('Province', 'Amphure', 'District')
            ->first();
        
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

        $html = $this->htmlwrite($buyer_profiles);

        return response()->json([
            'status' => 200,
            'message' => 'บันทึกข้อมูลสำเร็จ',
            'data' => $buyer_profiles,
            'htmltext' => $html,
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

        $html = $this->htmlwrite($buyer_profiles);

        return response()->json([
            'status' => 200,
            'message' => 'บันทึกข้อมูลสำเร็จ',
            'data' => $buyer_profiles,
            'htmltext' => $html,
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

        $html = $this->htmlwrite($buyer_profiles);

        return response()->json([
            'status' => 200,
            'message' => 'บันทึกข้อมูลสำเร็จ',
            'data' => $buyer_profiles,
            'htmltext' => $html,
        ]);
    }

    public function htmlwrite($buyer_profiles)
    {
        $html = "";
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
                                <label class="b-bank2"> ตั้งเป็นที่อยู่โปรไฟล์
                                    <input type="radio" name="profile_checked" '.$profile_checked.'>
                                    <span class="checkmark2"></span>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="b-bank3"> ตั้งเป็นที่อยู่จัดส่ง
                                    <input type="radio" name="delivery_checked" '.$delivery_checked.'>
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
                                    แก้ไข </p>
                            </a>
                        </div>
                        <div class="ttext-delate">
                            <a href="javascript:void(0)" onclick="buyerprofile_delete('.$buyerprofile->id.')">
                                <p> ลบ </p>
                            </a>
                        </div>
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="h-text-h">
                            <p>
                                ชื่อ-นามสกุล
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
                                โทรศัพท์
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
                                อีเมล
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
                                ที่อยู่
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

        return $html;
    }
}

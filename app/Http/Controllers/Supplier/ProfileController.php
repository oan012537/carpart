<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Supplier\users_supplier;
use App\Models\Amphures;
use App\Models\Geographies;
use App\Models\Districts;
use App\Models\Provinces;
use App\Models\Supplier\Role;
use App\Models\Supplier\Permission;
use App\Models\Supplier\Banks;
use Response;
use File;
use Nette\Utils\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('supplier.profile.profile.index',['supplier'=>$supplier]);
    }

    public function edit(){
        $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        // $supplier = [];
        $amphures = Amphures::where('province_id',$supplier->address_province)->get();
        $districts = Districts::where('amphure_id',$supplier->address_amphure)->get();
        $provinces = Provinces::all();
        $nameamphures = '';
        $namedistricts = '';
        $nameprovinces = '';

        $nameamphures = Amphures::find($supplier->address_amphure);
        $namedistricts = Districts::find($supplier->address_district);
        $nameprovinces = Provinces::find($supplier->address_province);
        $nameamphures = $nameamphures->name_th;
        $namedistricts = $namedistricts->name_th;
        $nameprovinces = $nameprovinces->name_th;

        return view('supplier.profile.profile.update',['supplier'=>$supplier,'amphures'=>$amphures,'districts'=>$districts,'provinces'=>$provinces,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
        // return view('supplier.profile.profile.update',['provinces'=>$provinces,'supplier'=>$supplier,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
    }

    public function update(Request $request){
        
        $imgcover1 = '';
        $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        if($request->hasFile('myFile')){
			$files = $request->file('myFile');
            $filename 	= $files->getClientOriginalName();
            $extension 	= $files->getClientOriginalExtension();
            $size		= $files->getSize();
            $imgcover1 	= date('His').$filename;
            $destinationPath = public_path()."/suppliers".'/'.$supplier->id.'/'.'IDcard';
            // dd($destinationPath);
            if(!File::exists(public_path().'/suppliers')){
                File::makeDirectory(public_path().'/suppliers');
            }
            if(File::exists($destinationPath)){
                $files->move($destinationPath, $imgcover1);
            }else{
                if(!File::exists(public_path().'/suppliers'.'/'.$supplier->id)){
                    File::makeDirectory(public_path().'/suppliers'.'/'.$supplier->id);
                }
                
                $pathforder = public_path().'/suppliers'.'/'.$supplier->id.'/'.'IDcard';
                // $pathforder = base_path().'/suppliers'.'/'.Auth::user()->id.'IDcard';
                
                File::makeDirectory($pathforder);
                // dd($pathforder);
                $files->move($destinationPath, $imgcover1);
                $imgcover1 = "/suppliers".'/'.$supplier->id.'/'.'IDcard'.'/'.$imgcover1;
            }
            
		}
        
        $supplier->first_name = $request->firstname;
        $supplier->last_name = $request->lastname;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->addressfull = $request->address.' ตำบล '.str_replace('ตำบล','',$request->districthid).' อำเภอ '.str_replace('เขต','',$request->amphurehid).' จังหวัด '.$request->provincehid.' '.$request->zipcode;
        $supplier->address = $request->address;
        $supplier->address_province = $request->province;
        $supplier->address_amphure = $request->amphure;
        $supplier->address_district = $request->district;
        $supplier->address_zipcode = $request->zipcode;
        $supplier->pic_card = $imgcover1;
        $supplier->save();
        return redirect()->route('supplier.profile');
        // $users_supplier = users_supplier::find(Auth::guard('supplier'));
        // dd($users_supplier);
        // return view('supplier.profile.profile.update');
    }

    public function provinces($id){
        $data = Amphures::where('province_id',$id)->get();
        // return view('backend.company.index',['data'=>$data]);
        return Response::json($data);
    }

    public function amphures($id){
        $data = Districts::where('amphure_id',$id)->get();
        // return view('backend.company.index',['data'=>$data]);
        return Response::json($data);

    }

    public function districts($id){
        $data = Districts::find($id);
        // return view('backend.company.index',['data'=>$data]);
        return $data->zip_code;
    }


    public function storeindex(){
        $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        return view('supplier.profile.store.index',['supplier'=>$supplier]);
    }

    public function storeedit(){
        $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        // dd($users_supplier);
        // $supplier = [];
        $amphures = Amphures::where('province_id',$supplier->store_province)->get();
        $districts = Districts::where('amphure_id',$supplier->store_amphure)->get();
        $provinces = Provinces::all();
        $nameamphures = '';
        $namedistricts = '';
        $nameprovinces = '';

        $nameamphures = Amphures::find($supplier->store_amphure);
        $namedistricts = Districts::find($supplier->store_district);
        $nameprovinces = Provinces::find($supplier->store_province);
        $nameamphures = !empty($nameamphures)?$nameamphures->name_th:'';
        $namedistricts = !empty($namedistricts)?$namedistricts->name_th:'';
        $nameprovinces = !empty($nameprovinces)?$nameprovinces->name_th:'';

        return view('supplier.profile.store.update',['supplier'=>$supplier,'amphures'=>$amphures,'districts'=>$districts,'provinces'=>$provinces,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
        // return view('supplier.profile.store.update',['provinces'=>$provinces,'supplier'=>$supplier,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
    }

    public function storeupdate(Request $request){
        // dd($request->all());
        
        $imgcover1 = '';
        $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        
        $supplier->store_name = $request->name;
        $supplier->company_email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->facebook = $request->pagefacebook;
        $supplier->googlemap = $request->googlemap;
        $supplier->store_addressfull = $request->address.' ตำบล '.str_replace('ตำบล','',$request->districthid).' อำเภอ '.str_replace('เขต','',$request->amphurehid).' จังหวัด '.$request->provincehid.' '.$request->zipcode;
        $supplier->store_address = $request->address;
        $supplier->store_province = $request->province;
        $supplier->store_amphure = $request->amphure;
        $supplier->store_district = $request->district;
        $supplier->store_zipcode = $request->zipcode;
        $supplier->store_addressidcard = !empty($request->addressidcard)?$request->addressidcard:'';
        
        if(isset($request->addressidcard)){
            $supplier->store_addressfull = $supplier->addressfull;
            $supplier->store_address = $supplier->address;
            $supplier->store_province = $supplier->address_province;
            $supplier->store_amphure = $supplier->address_amphure;
            $supplier->store_district = $supplier->address_district;
            $supplier->store_zipcode = $supplier->address_zipcode;
        }
        $supplier->save();
        return redirect()->route('supplier.profile.store');
    }

    public function legalstoreupdate(Request $request){
        // dd($request->all());
        $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        
        $certificate = '';
        if($request->hasFile('myFile')){
			$files = $request->file('myFile');
            $filename 	= $files->getClientOriginalName();
            $extension 	= $files->getClientOriginalExtension();
            $size		= $files->getSize();
            $certificate 	= 'certificate'.date('His').$filename;
            $destinationPath = public_path()."/suppliers".'/'.$supplier->id.'/'.'Company';
            // dd($destinationPath);
            if(!File::exists(public_path().'/suppliers')){
                File::makeDirectory(public_path().'/suppliers');
            }
            if(File::exists($destinationPath)){
                $files->move($destinationPath, $certificate);
                $certificate = "/suppliers".'/'.$supplier->id.'/'.'Company'.'/'.$certificate;
            }else{
                if(!File::exists(public_path().'/suppliers'.'/'.$supplier->id)){
                    File::makeDirectory(public_path().'/suppliers'.'/'.$supplier->id);
                }
                
                $pathforder = public_path().'/suppliers'.'/'.$supplier->id.'/'.'Company';
                // $pathforder = base_path().'/suppliers'.'/'.Auth::user()->id.'IDcard';
                
                File::makeDirectory($pathforder);
                // dd($pathforder);
                $files->move($destinationPath, $certificate);
                $certificate = "/suppliers".'/'.$supplier->id.'/'.'Company'.'/'.$certificate;
            }
            
		}

        $vatcopy = '';
        if($request->hasFile('myFile1')){
			$files = $request->file('myFile1');
            $filename 	= $files->getClientOriginalName();
            $extension 	= $files->getClientOriginalExtension();
            $size		= $files->getSize();
            $vatcopy 	= 'vatcopy'.date('His').$filename;
            $destinationPath = public_path()."/suppliers".'/'.$supplier->id.'/'.'Company';
            // dd($destinationPath);
            if(!File::exists(public_path().'/suppliers')){
                File::makeDirectory(public_path().'/suppliers');
            }
            if(File::exists($destinationPath)){
                $files->move($destinationPath, $vatcopy);
                $vatcopy = "/suppliers".'/'.$supplier->id.'/'.'Company'.'/'.$vatcopy;
            }else{
                if(!File::exists(public_path().'/suppliers'.'/'.$supplier->id)){
                    File::makeDirectory(public_path().'/suppliers'.'/'.$supplier->id);
                }
                
                $pathforder = public_path().'/suppliers'.'/'.$supplier->id.'/'.'Company';
                // $pathforder = base_path().'/suppliers'.'/'.Auth::user()->id.'IDcard';
                
                File::makeDirectory($pathforder);
                // dd($pathforder);
                $files->move($destinationPath, $vatcopy);
                $vatcopy = "/suppliers".'/'.$supplier->id.'/'.'Company'.'/'.$vatcopy;
                
            }
            
		}
        $supplier = users_supplier::find(Auth::guard('supplier')->user()->id);
        
        $supplier->company_name = $request->nameorg;
        $supplier->branch = $request->branch;
        $supplier->vat_id = $request->taxid;
        $supplier->company_email = $request->companyemail;
        $supplier->phone = $request->phone;
        $supplier->facebook = $request->pageurl;
        $supplier->googlemap = $request->googlemap;
        $supplier->store_addressfull = $request->addressorg.' ตำบล '.str_replace('ตำบล','',$request->districthid).' อำเภอ '.str_replace('เขต','',$request->amphurehid).' จังหวัด '.$request->provincehid.' '.$request->zipcode;
        $supplier->store_address = $request->addressorg;
        $supplier->store_province = $request->province;
        $supplier->store_amphure = $request->amphure;
        $supplier->store_district = $request->district;
        $supplier->store_zipcode = $request->zipcode;
        $supplier->pic_certificate = ($certificate =='')?$supplier->pic_certificate:$certificate;
        $supplier->pic_vat = ($vatcopy =='')?$supplier->pic_vat:$vatcopy;
        $supplier->save();
        return redirect()->route('supplier.profile.store');
    }
    
    public function storeverifyupdate(Request $request){
        dd($request->all());
        $imgcover1 = '';
    }

    public function bankindex(){
        $banks = Banks::where('banks_supplierid',Auth::guard('supplier')->user()->id)->get();
        return view('supplier.profile.bank.index',['banks'=>$banks]);
    }

    public function bankadd(){
        return view('supplier.profile.bank.add');
    }

    public function bankstore(Request $request){
        // dd($request->all());
        DB::beginTransaction();
        try {
            $imgcover1 = '';
            if($request->hasFile('myFile')){
                $files = $request->file('myFile');
                $filename 	= $files->getClientOriginalName();
                $extension 	= $files->getClientOriginalExtension();
                $size		= $files->getSize();
                $imgcover1 	= date('His').$filename;
                $destinationPath = public_path()."/suppliers".'/'.Auth::guard('supplier')->user()->id.'/'.'Bank';
                // dd($destinationPath);
                if(!File::exists(public_path().'/suppliers')){
                    File::makeDirectory(public_path().'/suppliers');
                }
                if(File::exists($destinationPath)){
                    $files->move($destinationPath, $imgcover1);
                }else{
                    if(!File::exists(public_path().'/suppliers'.'/'.Auth::guard('supplier')->user()->id)){
                        File::makeDirectory(public_path().'/suppliers'.'/'.Auth::guard('supplier')->user()->id);
                    }
                    
                    $pathforder = public_path().'/suppliers'.'/'.Auth::guard('supplier')->user()->id.'/'.'Bank';
                    // $pathforder = base_path().'/suppliers'.'/'.Auth::user()->id.'IDcard';
                    
                    File::makeDirectory($pathforder);
                    // dd($pathforder);
                    $files->move($destinationPath, $imgcover1);
                    $imgcover1 = '/suppliers'.'/'.Auth::guard('supplier')->user()->id.'/'.'Bank/'.$imgcover1;
                }
                
            }
            // DB::transaction();
            $bank = new Banks;
            $bank->banks_supplierid = Auth::guard('supplier')->user()->id;
            $bank->banks_accountnumber = $request->numberbank;
            $bank->banks_accountname = $request->namebank;
            $bank->banks_name = $request->bank;
            $bank->banks_branch = $request->bankbranch;
            $bank->banks_type = $request->banktype;
            $bank->banks_refimage = $imgcover1;
            $bank->banks_active = !empty($request->setreceive)?$request->setreceive:'0';

            // $bank->created_for = !empty(Auth::user()->name)?Auth::user()->name:'';
            $bank->save();
            DB::commit();
            return redirect()->route('supplier.profile.bank');
            
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
            return redirect()->back();
            
        }
    }

    public function settingindex(){
        $role = Role::leftjoin('supplier_permission','role_id','permission_role')->get();
        // $user = User::all();
        // foreach($user as $item){
        //     $data[$item->role][] = $item;
        // }
        $user = [];
        $data = [];
        // dd($data);
        return view('supplier.profile.setting.index',['roles'=>$role,'users'=>$user,'datas'=>$data]);
    }

    public function settingrolestore(Request $request){
        DB::beginTransaction();
        try {
            // DB::transaction();
            $role = new Role;
            $role->role_name = $request->rolename;
            $role->created_for = !empty(Auth::user()->name)?Auth::user()->name:'';
            $role->created_at = date("Y-m-d H:i:s");
            $role->updated_at = date("Y-m-d H:i:s");
            $role->save();
            $permission = new Permission;
            $permission->permission_role = $role->role_id;
            $permission->created_at = date("Y-m-d H:i:s");
            $permission->updated_at = date("Y-m-d H:i:s");
            $permission->save();
            DB::commit();
            $role = Role::all();
            $json['status'] = 'success';
            $json['msg'] = 'บันทึกเรียบร้อย';
            $json['data'] = $role;
            return Response::json($json);
        } catch (\Exception $e) {
            DB::rollback();
            $role = Role::all();
            $json['status'] = 'error';
            $json['msg'] = 'เกิดข้อผิดพลาด';
            $json['data'] = $role;
            return Response::json($json);
            
        }
    }

    public function settinguserstore(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
        ]);

        $user = users_supplier::create([
            'first_name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            // 'email_verified_at' => date('Y-m-d H:i:s'),
            'status' => (!empty($request->status)?$request->status:0),
            'role' => $request->roleid,
            'password' => Hash::make('12345678'),
            'created_for' => !empty(Auth::user()->name)?Auth::user()->name:'',
        ]);
        $sendsms = $this->sendsms($request->email,'12345678',$request->phone);
        // dd($sendsms);
        return redirect()->route('supplier.profile.setting');
    }

    public function changepermission(Request $request){
        try {
            $permission = Permission::where('permission_role',$request->roleid)->first();
            $namefield = $request->namefield;
            $permission->$namefield = $request->status;
            // dd($permission);
            $permission->save();
            $json['status'] = 'success';
            $json['msg'] = 'บันทึกเรียบร้อย';
            return Response::json($json);
        } catch (\Illuminate\Database\QueryException $e) {
            $json['status'] = 'error';
            $json['msg'] = 'เกิดข้อผิดพลาด';
            return Response::json($json);
        }
        
    }

    public function searchrole(Request $request){
        $role = Role::where('role_name','NOT LIKE','%'.$request->searchrole.'%')->get();
        return Response::json($role);
    }

    public function notificationindex(){
        return view('supplier.profile.notification.index');
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

    public function sendsms($user,$pass,$phone){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://portal-otp.smsmkt.com/api/send-message',
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
            "message"=>"ชื่อผู้ใช้งาน/Username : ".$user."\n รหัสผ่าน/Password : ".$pass,
            "phone"=>$phone,
            "sender"=>"CAR-PARTS",
            )),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        // echo $response;
        $response = json_decode($response,true);
        return Response::json($response);
    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Settinguser;
use App\Models\Backend\Company;
use App\Models\Backend\Role;
use App\Models\Backend\Settinguser_permission;
use Illuminate\Support\Facades\Auth;
use Response;
// use DB;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class SettinguserController extends Controller
{
    public function index(){
        $company = Company::find(1);
        $role = Role::leftjoin('users_permission','role_id','permission_role')->get();
        $user = User::all();
        foreach($user as $item){
            $data[$item->role][] = $item;
        }
        // dd($data);
        return view('backend.settinguser.index',['company'=>$company,'roles'=>$role,'users'=>$user,'datas'=>$data]);
    }

    public function add(){
        $company = Company::find(1);
        return view('backend.settinguser.index',['company'=>$company]);
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            // 'email_verified_at' => date('Y-m-d H:i:s'),
            'status' => (!empty($request->status)?$request->status:0),
            'role' => $request->roleid,
            'password' => Hash::make('12345678'),
        ]);
        return redirect()->route('backend.setting.user');
    }


    public function edit($id){
        $user = User::leftjoin('role','role.role_id','users.role')->find($id);
        return Response::json($user);
    }

    public function update(Request $request){
        
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->status = (!empty($request->status)?$request->status:0);
        $user->role = $request->roleid;
        $user->save();

        return redirect()->route('backend.setting.user');
    }

    public function destroy(Request $request){
        $user = User::find($request->id);
        $user->delete();
        return "Y";
    }

    public function changestatus(Request $request){
        try {
            $user = User::find($request->id);
            $user->status = $request->status;
            $user->save();
            $json['status'] = 'success';
            $json['msg'] = 'บันทึกเรียบร้อย';
            return Response::json($json);
        } catch (\Illuminate\Database\QueryException $e) {
            $json['status'] = 'error';
            $json['msg'] = 'เกิดข้อผิดพลาด';
            return Response::json($json);
        }
        
    }

    public function addrole(Request $request){
        DB::beginTransaction();
        try {
            // DB::transaction();
            $role = new Role;
            $role->role_name = $request->rolename;
            $role->created_for = Auth::user()->name;
            $role->created_at = date("Y-m-d H:i:s");
            $role->updated_at = date("Y-m-d H:i:s");
            $role->save();
            $permission = new Settinguser_permission;
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
            // return 'บันทึกข้อมูลไม่สำเร็จ';
            
        }
        // dd($request->all());
        
        // $company = Company::find(1);
        // return view('backend.settinguser.index',['company'=>$company]);
    }

}

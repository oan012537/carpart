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
use Response;
use File;
use Nette\Utils\Image;

class ProfileController extends Controller
{
    public function index(){
        return view('supplier.profile.profile.index');
    }

    public function edit(){
        // $supplier = users_supplier::find(Auth::guard('supplier'));
        // dd($users_supplier);
        $supplier = [];
        // $amphures = Amphures::where('province_id',$company->address_province)->get();
        // $districts = Districts::where('amphure_id',$company->address_amphure)->get();
        $provinces = Provinces::all();
        $nameamphures = '';
        $namedistricts = '';
        $nameprovinces = '';

        // $nameamphures = Amphures::find($company->address_amphure);
        // $namedistricts = Districts::find($company->address_district);
        // $nameprovinces = Provinces::find($company->address_province);
        // $nameamphures = $nameamphures->name_th;
        // $namedistricts = $namedistricts->name_th;
        // $nameprovinces = $nameprovinces->name_th;

        // return view('supplier.profile.profile.update',['supplier'=>$supplier,'amphures'=>$amphures,'districts'=>$districts,'provinces'=>$provinces,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
        return view('supplier.profile.profile.update',['provinces'=>$provinces,'supplier'=>$supplier,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
    }

    public function update(Request $request){
        // dd($request->all());
        $imgcover1 = '';
        if($request->hasFile('myFile')){
			$files = $request->file('myFile');
            $filename 	= $files->getClientOriginalName();
            $extension 	= $files->getClientOriginalExtension();
            $size		= $files->getSize();
            $imgcover1 	= date('His').$filename;
            $destinationPath = public_path()."/suppliers".'/'.'IDcard';
            if(!File::exists(public_path().'/suppliers')){
                File::makeDirectory(public_path().'/suppliers');
            }
            if(File::exists($destinationPath)){
                $files->move($destinationPath, $imgcover1);
            }else{
                $pathforder = public_path().'/suppliers'.'/'.'IDcard';
                // $pathforder = base_path().'/suppliers'.'/'.Auth::user()->id.'IDcard';

                File::makeDirectory($pathforder);
                
                $files->move($destinationPath, $imgcover1);
            }
            
		}
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
        return view('supplier.profile.store.index');
    }

    public function storeedit(){
        // $supplier = users_supplier::find(Auth::guard('supplier'));
        // dd($users_supplier);
        $supplier = [];
        // $amphures = Amphures::where('province_id',$company->address_province)->get();
        // $districts = Districts::where('amphure_id',$company->address_amphure)->get();
        $provinces = Provinces::all();
        $nameamphures = '';
        $namedistricts = '';
        $nameprovinces = '';

        // $nameamphures = Amphures::find($company->address_amphure);
        // $namedistricts = Districts::find($company->address_district);
        // $nameprovinces = Provinces::find($company->address_province);
        // $nameamphures = $nameamphures->name_th;
        // $namedistricts = $namedistricts->name_th;
        // $nameprovinces = $nameprovinces->name_th;

        // return view('supplier.profile.profile.update',['supplier'=>$supplier,'amphures'=>$amphures,'districts'=>$districts,'provinces'=>$provinces,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
        return view('supplier.profile.store.update',['provinces'=>$provinces,'supplier'=>$supplier,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
    }

    public function storeupdate(Request $request){
        dd($request->all());
        $imgcover1 = '';
        return redirect()->route('supplier.profile');
        // $users_supplier = users_supplier::find(Auth::guard('supplier'));
        // dd($users_supplier);
        // return view('supplier.profile.profile.update');
    }

    public function bankindex(){
        return view('supplier.profile.bank.index');
    }

    public function settingindex(){
        return view('supplier.profile.setting.index');
    }

}

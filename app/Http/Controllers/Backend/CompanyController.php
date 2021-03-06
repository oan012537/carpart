<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Company;
use App\Models\Amphure;
use App\Models\Geographie;
use App\Models\District;
use App\Models\Province;
use Response;

class CompanyController extends Controller
{
    public function index(){
        $company = Company::find(1);
        return view('backend.company.index',['company'=>$company]);
    }

    public function add(){
        $company = Company::find(1);
        return view('backend.company.index',['company'=>$company]);
    }

    public function store(){
        $company = Company::find(1);
        return view('backend.company.index',['company'=>$company]);
    }


    public function edit(){
        $company = Company::find(1);
        $amphures = Amphure::where('province_id',$company->address_province)->get();
        $districts = District::where('amphure_id',$company->address_amphure)->get();
        $provinces = Province::all();

        $nameamphures = Amphure::find($company->address_amphure);
        $namedistricts = District::find($company->address_district);
        $nameprovinces = Province::find($company->address_province);
        $nameamphures = $nameamphures->name_th;
        $namedistricts = $namedistricts->name_th;
        $nameprovinces = $nameprovinces->name_th;

        return view('backend.company.update',['company'=>$company,'amphures'=>$amphures,'districts'=>$districts,'provinces'=>$provinces,'nameamphures'=>$nameamphures,'namedistricts'=>$namedistricts,'nameprovinces'=>$nameprovinces]);
    }

    public function update(Request $request){
        // dd($request->all());
        $company = Company::find(1);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->tel = $request->phone;
        $company->addressfull = $request->address.' ตำบล '.str_replace('ตำบล','',$request->districthid).' อำเภอ '.str_replace('เขต','',$request->amphurehid).' จังหวัด '.$request->provincehid.' '.$request->zipcode;
        $company->address = $request->address;
        $company->address_province = $request->province;
        $company->address_amphure = $request->amphure;
        $company->address_district = $request->district;
        $company->address_zipcode = $request->zipcode;
        // dd($company);
        $company->save();

        return view('backend.company.index',['company'=>$company]);
        return redirect()->route('backend.company');
    }

    public function destroy($id){
        $company = Company::find(1);
        return view('backend.company.index',['company'=>$company]);
    }

    public function provinces($id){
        $data = Amphure::where('province_id',$id)->get();
        // return view('backend.company.index',['data'=>$data]);
        return Response::json($data);
    }

    public function amphures($id){
        $data = District::where('amphure_id',$id)->get();
        // return view('backend.company.index',['data'=>$data]);
        return Response::json($data);

    }

    public function districts($id){
        $data = District::find($id);
        // return view('backend.company.index',['data'=>$data]);
        return $data->zip_code;
    }
}

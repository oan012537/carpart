<?php

namespace App\Http\Controllers;
use App\Models\Amphures;
use App\Models\Geographies;
use App\Models\Districts;
use App\Models\Provinces;
use App\Models\Amphure;  // OAT
use App\Models\District; // OAT
use App\Models\Province; // OAT
use Illuminate\Http\Request;
use Response;

class DataprovincesController extends Controller
{
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

    //-- OAT เพิ่มไม่อยากแก้ไขของเดิม
    public function fetchamphures($id){
        $data = Amphure::where('province_id',$id)->get();
        // return view('backend.company.index',['data'=>$data]);
        return Response::json($data);
    }

    public function fetchdistricts($id){
        $data = District::where('amphure_id',$id)->get();
        // return view('backend.company.index',['data'=>$data]);
        return Response::json($data);

    }

    public function fetchzipcode($id){
        $data = District::find($id);
        // return view('backend.company.index',['data'=>$data]);
        return $data->zip_code;
    }
}

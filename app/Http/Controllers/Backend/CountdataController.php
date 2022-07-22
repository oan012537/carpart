<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserSupplier;

class CountdataController extends Controller
{
    public function approvewait(Request $request){
        $data = UserSupplier::leftjoin('suppliers','user_suppliers.id','suppliers.user_id')->leftjoin('stores','suppliers.id','stores.supplier_id')->where('suppliers.status_code','request_approval')->count();
        return $data;
    }
}

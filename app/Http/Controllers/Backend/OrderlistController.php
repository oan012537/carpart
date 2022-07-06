<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Datatables;
use App\Models\Brand;

class OrderlistController extends Controller
{
    public function index()
    {
        $data = Brand::paginate(20);
        return view('backend.orderlist.index',['data'=>$data]);
    }

    public function unpaiddetails($id)
    {
        return view('backend.orderlist.unpaid');
    }

    public function delivereddetails($id)
    {
        return view('backend.orderlist.delivered');
    }

    public function shippingdetails($id)
    {
        return view('backend.orderlist.shipping');
    }

    public function receiveddetails($id)
    {
        return view('backend.orderlist.received');
    }

    public function canceldetails($id)
    {
        return view('backend.orderlist.cancel');
    }

    public function reviewdetails($id)
    {
        return view('backend.orderlist.review');
    }



}

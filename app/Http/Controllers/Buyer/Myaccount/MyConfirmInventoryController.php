<?php

namespace App\Http\Controllers\Buyer\Myaccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Buyer\mUsers_buyer;
use App\Models\Buyer\BuyerProfile;
use App\Models\Buyer\BuyerTaxInvoice;
use App\Models\Buyer\OrderRequestConfirminventory;

class MyConfirmInventoryController extends Controller
{
    public function index()
    {
        $user_id = Auth::guard('buyer')->user()->id;

        $confirminventories_all = OrderRequestConfirminventory::where('users_buyer_id', $user_id)->get();
        $confirminventories_pending = OrderRequestConfirminventory::where('users_buyer_id', $user_id)->where('status', 'pending')->get();
        $confirminventories_approved = OrderRequestConfirminventory::where('users_buyer_id', $user_id)->where('status', 'approved')->get();
        $confirminventories_canceled = OrderRequestConfirminventory::where('users_buyer_id', $user_id)->where('status', 'canceled')->get();

        $data = [
            'confirminventories_all' => $confirminventories_all,
            'confirminventories_pending' => $confirminventories_pending,
            'confirminventories_approved' => $confirminventories_approved,
            'confirminventories_canceled' => $confirminventories_canceled,
        ];

        return view('buyer.profile.confirminventory.index', $data);
    }
}

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

        $data['buyer_profiles'] = BuyerProfile::where('users_buyer_id', $data['user_buyer']->id)
            ->where('is_active','1')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('Province', 'Amphure', 'District')
            ->get();

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
}

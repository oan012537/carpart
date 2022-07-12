<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Buyer\mUsers_buyer;
use App\Models\Buyer\BuyerProfile;
use App\Models\Buyer\BuyerTaxInvoice;

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
            ->first();

        $data['buyer_tax_invoices'] = BuyerTaxInvoice::where('users_buyer_id', $data['user_buyer']->id)
            ->where('is_active','1')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('Province', 'Amphure', 'District')
            ->first();
        
        // dd($data['buyer_profiles']);

        return view('buyer.profile.profile.index', $data);
    }
}

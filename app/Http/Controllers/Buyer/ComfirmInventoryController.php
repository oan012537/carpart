<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Buyer\mUsers_buyer;
use App\Models\Buyer\BuyerProfile;
use App\Models\Buyer\BuyerTaxInvoice;

class ComfirmInventoryController extends Controller
{
    public function confirminventory($id)
    {
        $data['product'] = Product::where('id', $id)->first();
        $data['user_buyer'] = mUsers_buyer::where('id', Auth::guard('buyer')->user()->id)->first();
        $data['buyer_profiles'] = $buyer_profiles = BuyerProfile::where('users_buyer_id', Auth::guard('buyer')->user()->id)
            ->where('is_active','1')
            ->orderBy('is_profile', 'desc')
            ->orderBy('is_delivery', 'desc')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('userBuyer', 'Province', 'Amphure', 'District')
            ->get();
        $data['address_delivery'] = $data['buyer_profiles']->where('is_delivery', '1')->first();
        $data['buyer_tax_invoices'] = BuyerTaxInvoice::where('users_buyer_id', Auth::guard('buyer')->user()->id) // ใบกำกับภาษี
            ->where('is_active','1')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->with('Province', 'Amphure', 'District')
            ->first();

        //dd($data);

        return view('buyer.comfirminventory.index', $data);
    }
}

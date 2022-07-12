<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Buyer\mUsers_buyer;

class BuyerAccountController extends Controller
{
    public function index()
    {
        $data['user_buyer'] = mUsers_buyer::where('id', Auth::guard('buyer')->user()->id)
        ->with('buyerProfiles', 'buyerTaxInvoices')
        ->first();

        dd($data['user_buyer']);

        return view('buyer.profile.profile.index', $data);
    }
}

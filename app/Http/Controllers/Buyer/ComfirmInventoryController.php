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
use App\Models\Buyer\OrderRequestConfirminventory;

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

        return view('buyer.comfirminventory.index', $data);
    }

    public function confirminventory_store(Request $request)
    {
        DB::beginTransaction();
        try {  
            $user_buyer_id = Auth::guard('buyer')->user()->id;

            $path = 'buyers/confirminventories';
            $image = null;

            if ($request->image != '') {
                if (!empty($request->file('image'))) {
                    $img = $request->file('image');
                    $img_name = time() . '.' . $img->getClientOriginalExtension();
                    $save_path = $img->move(public_path($path), $img_name);
                    $image = $img_name;
                }
            }
            
            OrderRequestConfirminventory::create([
                'users_buyer_id' => $user_buyer_id,
                'supplier_id' => $request->supplier_id,
                'product_id' => $request->product_id,
                'product_name' => $request->product_name,
                'product_price' => $request->product_price,
                'request_vdo' => $request->request_vdo,
                'image' => $image,
                'vincode' => $request->vincode,
                'buyer_profile_id' => $request->buyer_profile_id,
                'destination' => $request->destination,
                'destination_phone' => $request->destination_phone,
                'destination_email' => $request->destination_email,
                'transport_by' => $request->transport_by,
                'is_tax' => $request->is_tax,
                'buyer_tax_invoice_id' => $request->buyer_tax_invoice_id,
                'taxid' => $request->taxid,
                'taxinvoice_company' => $request->taxinvoice_company,
                'taxinvoice_address' => $request->taxinvoice_address,
                'taxinvoice_phone' => $request->taxinvoice_phone,
                'status' => 'pending',
                'pending_date' => date('Y-m-d H:i:s'),
                'created_by' => $user_buyer_id,
                'updated_by' => $user_buyer_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            $status = 200;
            $message = "บันทึกข้อมูลสำเร็จ";

            DB::commit();
        } catch (\Exception $e) {
            $status = 404;
            $message = "บันทึกข้อมูลสำเร็จ";
            DB::rollback();
        }

        return response()->json([
            'status' => $status,
            'message' => $message,
        ]);
    }
}

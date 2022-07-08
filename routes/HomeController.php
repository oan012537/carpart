<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\selling;
use App\savelogsystem;
use App\sellingdetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellingdate = selling::select(DB::raw('YEAR(MIN(selling_date)) as min,year(MAX(selling_date)) as max'))->first();
        // dd($sellingdate);
        return view('dashboard/index',['data'=>$sellingdate]);
    }
	
	public function dashboard()
    {
        $sellingdate = selling::select(DB::raw('YEAR(MIN(selling_date)) as min,year(MAX(selling_date)) as max'))->first();
        // $sell = admin::where('position',4)->get();
        // dd($sellingdate);
        return view('dashboard/index',['data'=>$sellingdate]);
    }
	public function scanqrcode()
    {
        return view('qrcode/index');
    }
    public function logsystem()
    {
        $savelogsystem = savelogsystem::select(DB::raw('log_system.logsystem_text,users.name,log_system.created_at'))->leftjoin('users','users.id','log_system.logsystem_adminid')->get();
        return view('logsystem/index',['data'=>$savelogsystem]);
    }
    public function copytosellingdetail()
    {
        $data = sellingdetail::leftjoin('orders','order_id','sellingdetail_sellingref')->get();
        foreach ($data as $value) {
            if($value->sellingdetail_typeunit == ''){
                echo 'order_id '.$value->order_id.'  selling_detail '.$value->sellingdetail_id.'<br>';
                $value->sellingdetail_typeunit = $value->order_typeunit;
                $value->sellingdetail_unit = $value->order_unit;
                $value->sellingdetail_capital = $value->order_capital;
                $value->sellingdetail_count = $value->order_count;
                $value->sellingdetail_balance = $value->order_balance;
                dd($value);
            }
            
            
        }
        dd();
    }
	public function logout(){
		Auth::logout();
		return redirect('/backoffice');
	}
}

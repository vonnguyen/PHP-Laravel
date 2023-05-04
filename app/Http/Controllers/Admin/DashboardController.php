<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bill;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $bills = bill::orderBy("id", "desc")->paginate(4); //lay ra danh sach bill
        $billsNew = DB::table('bills')
            ->select('id')
            ->where('statuss', 2)
            ->get();
        $arr = [];
        foreach ($billsNew as $item) {
            $arr[] = $item->id;
        }
        // return $bills;
        $topThreeProductRating = DB::table('detail_bills')
            ->select('id_pro', DB::raw('count(*) as total'))
            ->whereIn('id_bill', $arr)
            ->groupBy('id_pro')
            ->limit(3)
            ->orderBy('total', 'desc')
            ->get();
        foreach ($topThreeProductRating as $item) {
            $item->info_product = Product::where('id', $item->id_pro)->first();
        }
        //sp yeu thich nhat
        $billsLove = DB::table('bills')
        ->select('id')
        ->where('statuss', 2)
        ->get();
    $arr = [];
    foreach ($billsLove as $item) {
        $arr[] = $item->id;
    }
    // return $bills;
    $topThreeProductRatingShort = DB::table('detail_bills')
        ->select('id_pro', DB::raw('count(*) as total'))
        ->whereIn('id_bill', $arr)
        ->groupBy('id_pro')
        ->limit(3)
        ->orderBy('total', 'asc')
        ->get();
    foreach ($topThreeProductRatingShort as $item) {
        $item->info_product = Product::where('id', $item->id_pro)->first();
    }
        $billStatusTwo = bill:: where ('statuss', 2)-> get();
        foreach ($billStatusTwo as $item){
        $item->detail_bill = $item->detailBill ;
        }
        $TongDoanhThu = 0;
        foreach ($billStatusTwo as $item){
            foreach ($item -> detail_bill as $item2 ){
                $TongDoanhThu += $item2 -> total;
                }
            }
        $TongSoHang = 0;
        foreach ($billStatusTwo as $item){
            foreach ($item -> detail_bill as $item2 ){
                $TongSoHang += $item2 -> number;
                }
            }
            $TongDonHang = 0;
        foreach ($billStatusTwo as $item){          
                $TongDonHang++ ;           
            }
        $cate = DB::table('categories')->select('name')->get();;
        return view('admin.index', compact("bills","topThreeProductRating","topThreeProductRatingShort", 
                                            "TongDoanhThu","cate","TongSoHang","TongDonHang"));
    }

}

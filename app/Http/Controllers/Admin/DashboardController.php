<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bill;
use App\Models\detail_bill;
use App\Models\Product;
use App\Models\Statistic;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $req)
    {
        $year = $req->year ?? "2023";
        $bills = bill::orderBy("id", "desc")->get(); //lay ra danh sach bill
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
        // dd($topThreeProductRating);
        foreach ($topThreeProductRating as $item) {
            $item->info_product = Product::withoutTrashed()->where('id', $item->id_pro)->first();
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
            $item->info_product = Product::withTrashed()->where('id', $item->id_pro)->first();
        }
        $billStatusTwo = bill::where('statuss', 2)->get();
        foreach ($billStatusTwo as $item) {
            $item->detail_bill = $item->detailBill;
        }
        $TongDoanhThu = 0;
        foreach ($billStatusTwo as $item) {
            foreach ($item->detail_bill as $item2) {
                $TongDoanhThu += $item2->total;
            }
        }
        $TongSoHang = 0;
        foreach ($billStatusTwo as $item) {
            foreach ($item->detail_bill as $item2) {
                $TongSoHang += $item2->number;
            }
        }
        $TongDonHang = 0;
        foreach ($billStatusTwo as $item) {
            $TongDonHang++;
        }
        $cate = DB::table('categories')->select('name')->get();



        //
         $data_month = $this->getBillMonth($year);  
        //

        return view('admin.dashboard', compact(
            "bills",
            "topThreeProductRating",
            "topThreeProductRatingShort",
            "TongDoanhThu",
            "cate",
            "TongSoHang",
            "TongDonHang",
            "data_month"
        ));
    }



    function getBillMonth($year)
    {
        $data = detail_bill::select('id', 'created_at', 'total')->where('created_at', 'LIKE', '%' . $year . '%')->orderBy('created_at', 'asc')->get()->groupBy(function ($data) {
            return Carbon::parse($data->created_at)->format('M');
        });
     
        // $data = Bill::select('months')->groupby('month')
        //     ->orderBy('months', 'ASC')
        //     ->get();
        return $data;
    }
}

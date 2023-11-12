<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bill;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BillController extends Controller
{
    // Them
    // function add(Request $request){

    //     $bill  = new bill();
    //     $bill->name = $request->name;
    //     $bill->email = $request->email;

    //     $bill->address = $request->diachi;
    //     $bill->phone = $request->sdt;
    //     $bill->group_id = $request->group;
    //     $bill->img =  cloudinary()->upload($request->file('img')->getRealPath())->getSecurePath();
    //     $bill->save();
    //     return redirect()->route('admin.bill.list');
    // }
    function list()
    {
        $bills = bill::orderBy("id", "desc")->get();
        return view('admin.bill.list', compact("bills"));  // truyen du lieu vao danh muc
    }
    // Hien thi add
    public function view($id)
    {

        $exports = bill::find($id);
        $export_details = $exports->detailBill;
        return view('admin.bill.viewbill', compact('exports', 'export_details'));
    }

    public function generate_invoice($order_id)
    {
        $order = bill::findOrFail($order_id);
        $export_details = $order->detailBill;
        $data = ['exports' => $order, 'export_details' => $export_details];
        $pdf = Pdf::loadView('admin.bill.viewbill', $data);
        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('Phiếu_Hàng_' . $order->id . '_' . $todayDate . '.pdf');
    }
}

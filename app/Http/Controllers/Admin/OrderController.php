<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use PDF;
class OrderController extends Controller
{
    public function index(){

        $orderList = Order::latest()->get();

        return view('admin.order.index',compact('orderList'));
    }

    public function destroy($id){

        //dd(1);

        $user = Order::destroy($id);

        return redirect()->route('orderList.index')->with('error','Deleted successfully!');
    }


    public function show($id){

        $orderIdList = Order::where('id',$id)->first();
        $orderDetailList = OrderDetail::where('orderId',$id)->latest()->get();

        return view('admin.order.show')->with(['orderIdList' => $orderIdList,'orderDetailList' => $orderDetailList]);


    }

    public function printData($id){
        $orderIdList = Order::where('id',$id)->first();
        $orderDetailList = OrderDetail::where('orderId',$id)->latest()->get();
         $pdf=PDF::loadView('admin.order.print',['orderIdList'=>$orderIdList,'orderDetailList'=>$orderDetailList]);

         return $pdf->stream('Order_Receipt.pdf');
 }


    public function update(Request $request,$id){

       // dd($id);

        $user = Order::find($id);
        $user->productType = $request->status;
        $user->save();

        return redirect()->back()->with('success','Confirmed successfully!');
    }
}

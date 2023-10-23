<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeliveryCharge;
use Image;
class DeliveryChargeController extends Controller
{
    public function index(){


        // if ($request->hasfile('big_image')) {

        //     $productImage = $request->file('big_image');
        //       $imageName = time().$productImage->getClientOriginalName();
        //       $directory = 'public/uploads/';
        //       $imageUrl = $directory.$imageName;

        //       $img=Image::make($productImage)->resize(1800,1006);
        //       $img->save($imageUrl);

        //        $category->big_image =  'public/uploads/'.$imageName;

        //   }

        $allSystemInfo = DeliveryCharge::latest()->get();

        return view('admin.deliveryChargeList.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.deliveryChargeList.create');
    }


    public function edit($id){

        $allSystemInfo = DeliveryCharge::where('id',$id)->first();

        return view('admin.deliveryChargeList.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = DeliveryCharge::find($id);
   $user->areaName = $request->areaName;
   $user->shipPrice = $request->shipPrice;
   $user->save();

   return redirect()->route('deliveryChargeList.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new DeliveryCharge();
       $user->areaName = $request->areaName;
       $user->shipPrice = $request->shipPrice;
       $user->save();

       return redirect()->route('deliveryChargeList.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = DeliveryCharge::destroy($id);

        return redirect()->route('deliveryChargeList.index')->with('error','Deleted successfully!');
    }
}

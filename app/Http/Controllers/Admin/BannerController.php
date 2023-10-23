<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\SystemInfo;
use App\Models\Banner;
class BannerController extends Controller
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

        $allSystemInfo = Banner::latest()->get();

        return view('admin.banner.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.banner.create');
    }


    public function edit($id){

        $allSystemInfo = Banner::where('id',$id)->first();

        return view('admin.banner.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = Banner::find($id);
    if ($request->hasfile('bannerImage')) {

            $productImage = $request->file('bannerImage');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(1120,480);
              $img->save($imageUrl);

               $user->bannerImage =  'public/uploads/'.$imageName;

          }


   $user->save();

   return redirect()->route('bannerList.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new Banner();
       if ($request->hasfile('bannerImage')) {

        $productImage = $request->file('bannerImage');
          $imageName = time().$productImage->getClientOriginalName();
          $directory = 'public/uploads/';
          $imageUrl = $directory.$imageName;

          $img=Image::make($productImage)->resize(1120,480);
          $img->save($imageUrl);

           $user->bannerImage =  'public/uploads/'.$imageName;

      }


       $user->save();

       return redirect()->route('bannerList.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = Banner::destroy($id);

        return redirect()->route('bannerList.index')->with('error','Deleted successfully!');
    }
}

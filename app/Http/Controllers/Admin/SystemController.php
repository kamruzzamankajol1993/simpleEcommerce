<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\SystemInfo;
class SystemController extends Controller
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

        $allSystemInfo = SystemInfo::latest()->get();

        return view('admin.system.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.system.create');
    }


    public function edit($id){

        $allSystemInfo = SystemInfo::where('id',$id)->first();

        return view('admin.system.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = SystemInfo::find($id);
   $user->websiteName = $request->websiteName;
   $user->websitePhone = $request->websitePhone;
   $user->websiteEmail = $request->websiteEmail;
   $user->websiteAbout = $request->websiteAbout;
   $user->websiteAddress = $request->websiteAddress;
   $user->url_name = $request->url_name;
   if ($request->hasfile('websiteLogo')) {
       $file = $request->file('websiteLogo');
       $extension = $file->getClientOriginalExtension();
       $filename = time() . '.' . $extension;
       $file->move('public/uploads/', $filename);
       $user->websiteLogo = 'public/uploads/' . $filename;
   }

   if ($request->hasfile('websiteIcon')) {
       $file = $request->file('websiteIcon');
       $extension = $file->getClientOriginalExtension();
       $filename = time() . '.' . $extension;
       $file->move('public/uploads/', $filename);
       $user->websiteIcon = 'public/uploads/' . $filename;
   }


   $user->save();

   return redirect()->route('systemInfo.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new SystemInfo();
       $user->websiteName = $request->websiteName;
       $user->websitePhone = $request->websitePhone;
       $user->websiteEmail = $request->websiteEmail;
       $user->websiteAbout = $request->websiteAbout;
       $user->websiteAddress = $request->websiteAddress;
       $user->url_name = $request->url_name;
       if ($request->hasfile('websiteLogo')) {
           $file = $request->file('websiteLogo');
           $extension = $file->getClientOriginalExtension();
           $filename = time() . '.' . $extension;
           $file->move('public/uploads/', $filename);
           $user->websiteLogo = 'public/uploads/' . $filename;
       }

       if ($request->hasfile('websiteIcon')) {
           $file = $request->file('websiteIcon');
           $extension = $file->getClientOriginalExtension();
           $filename = time() . '.' . $extension;
           $file->move('public/uploads/', $filename);
           $user->websiteIcon = 'public/uploads/' . $filename;
       }


       $user->save();

       return redirect()->route('systemInfo.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = SystemInfo::destroy($id);

        return redirect()->route('systemInfo.index')->with('error','Deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialLink;
use Image;
class SocialLinkController extends Controller
{
    public function index(){




        $allSystemInfo = SocialLink::latest()->get();

        return view('admin.socialLinkList.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.socialLinkList.create');
    }


    public function edit($id){

        $allSystemInfo = SocialLink::where('id',$id)->first();

        return view('admin.socialLinkList.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = SocialLink::find($id);
   $user->linkName = $request->linkName;
   $user->linkMain = $request->linkMain;
   $user->save();

   return redirect()->route('socialLinkList.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new SocialLink();
       $user->linkName = $request->linkName;
       $user->linkMain = $request->linkMain;
       $user->save();

       return redirect()->route('socialLinkList.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = SocialLink::destroy($id);

        return redirect()->route('socialLinkList.index')->with('error','Deleted successfully!');
    }
}

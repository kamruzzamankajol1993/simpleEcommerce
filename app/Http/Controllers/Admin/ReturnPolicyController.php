<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReturnPolicy;
use Image;
class ReturnPolicyController extends Controller
{
    public function index(){




        $allSystemInfo = ReturnPolicy::latest()->get();

        return view('admin.returnPolicy.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.returnPolicy.create');
    }


    public function edit($id){

        $allSystemInfo = ReturnPolicy::where('id',$id)->first();

        return view('admin.returnPolicy.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = ReturnPolicy::find($id);
   $user->return_policies = $request->return_policies;
   $user->save();

   return redirect()->route('returnPolicy.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new ReturnPolicy();
       $user->return_policies = $request->return_policies;
       $user->save();

       return redirect()->route('returnPolicy.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = ReturnPolicy::destroy($id);

        return redirect()->route('returnPolicy.index')->with('error','Deleted successfully!');
    }
}

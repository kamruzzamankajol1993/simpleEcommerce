<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
class ReviewController extends Controller
{
    public function index(){

        $allMessageList = Review::latest()->get();

        return view('admin.review.index',compact('allMessageList'));
    }


    public function destroy($id){

        //dd(1);

        $user = Review::destroy($id);

        return redirect()->route('reviewList.index')->with('error','Deleted successfully!');
    }


    public function edit($id){

        //dd(1);

        $user = Review::find($id);
        $user->status=1;
        $user->save();

        return redirect()->route('reviewList.index')->with('success','Approved successfully!');
    }
}

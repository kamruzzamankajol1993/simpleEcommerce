<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){


        $allSystemInfo = Product::latest()->get();

        return view('admin.productList.index',compact('allSystemInfo'));
    }

    public function create(){

        return view('admin.productList.create');
    }


    public function edit($id){

        $allSystemInfo = Product::where('id',$id)->first();

        return view('admin.productList.edit',compact('allSystemInfo'));

    }


    public function update(Request $request,$id){
   // Create New User
   $user = Product::find($id);

   $user->type = $request->type;
   $user->productName = $request->productName;
   $user->productPrice = $request->productPrice;
   $user->productDiscountPrice = $request->productDiscountPrice;
   $user->productShortDescription = $request->productShortDescription;
   $user->productMainDescription = $request->productMainDescription;
    if ($request->hasfile('productImageOne')) {

            $productImage = $request->file('productImageOne');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(450,450);
              $img->save($imageUrl);

               $user->productImageOne =  'public/uploads/'.$imageName;

          }

          if ($request->hasfile('productImageTwo')) {

            $productImage = $request->file('productImageTwo');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(450,450);
              $img->save($imageUrl);

               $user->productImageTwo =  'public/uploads/'.$imageName;

          }

          if ($request->hasfile('productImageThree')) {

            $productImage = $request->file('productImageThree');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(450,450);
              $img->save($imageUrl);

               $user->productImageThree =  'public/uploads/'.$imageName;

          }


          if ($request->hasfile('productImageFour')) {

            $productImage = $request->file('productImageFour');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(450,450);
              $img->save($imageUrl);

               $user->productImageFour =  'public/uploads/'.$imageName;

          }


          if ($request->hasfile('productImageFive')) {

            $productImage = $request->file('productImageFive');
              $imageName = time().$productImage->getClientOriginalName();
              $directory = 'public/uploads/';
              $imageUrl = $directory.$imageName;

              $img=Image::make($productImage)->resize(450,450);
              $img->save($imageUrl);

               $user->productImageFive =  'public/uploads/'.$imageName;

          }


   $user->save();

   return redirect()->route('productList.index')->with('success','Updated successfully!');

    }


    public function store(Request $request){


        // Create New User
       $user = new Product();
       $user->type = $request->type;
       $user->productName = $request->productName;
       $user->productPrice = $request->productPrice;
       $user->productDiscountPrice = $request->productDiscountPrice;
       $user->productShortDescription = $request->productShortDescription;
       $user->productMainDescription = $request->productMainDescription;
        if ($request->hasfile('productImageOne')) {

                $productImage = $request->file('productImageOne');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(450,450);
                  $img->save($imageUrl);

                   $user->productImageOne=  'public/uploads/'.$imageName;

              }

              if ($request->hasfile('productImageTwo')) {

                $productImage = $request->file('productImageTwo');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(450,450);
                  $img->save($imageUrl);

                   $user->productImageTwo =  'public/uploads/'.$imageName;

              }

              if ($request->hasfile('productImageThree')) {

                $productImage = $request->file('productImageThree');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(450,450);
                  $img->save($imageUrl);

                   $user->productImageThree =  'public/uploads/'.$imageName;

              }


              if ($request->hasfile('productImageFour')) {

                $productImage = $request->file('productImageFour');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(450,450);
                  $img->save($imageUrl);

                   $user->productImageFour =  'public/uploads/'.$imageName;

              }


              if ($request->hasfile('productImageFive')) {

                $productImage = $request->file('productImageFive');
                  $imageName = time().$productImage->getClientOriginalName();
                  $directory = 'public/uploads/';
                  $imageUrl = $directory.$imageName;

                  $img=Image::make($productImage)->resize(450,450);
                  $img->save($imageUrl);

                   $user->productImageFive =  'public/uploads/'.$imageName;

              }


       $user->save();

       return redirect()->route('productList.index')->with('success','Added successfully!');
    }


    public function destroy($id){

        //dd(1);

        $user = Product::destroy($id);

        return redirect()->route('productList.index')->with('error','Deleted successfully!');
    }
}

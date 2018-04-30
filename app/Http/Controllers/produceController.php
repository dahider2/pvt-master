<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produce;
use App\Models\Photo;
use App\Models\Annonce;


class produceController extends Controller
{
    //
    public function showProduce(){
      return view('postad');
    }

    public function addProduce(Request $request){
      $add;
      // $result = \App\Models\Produce::create(
      //   [
      //     'title'=>$request->input('title'),
      //     'sku'=> Produce::getUniqueSku(),
      //     'description'=>$request->input('description'),
      //     'name'=>$request->input('name'),
      //     'phone'=>$request->input('phone'),
      //     'email'=>$request->input('email')
      //   ]
      // );
      $unique_value = "annonce".uniqid();
      $filename = 'image_'.uniqid();
      $temp = $filename;

      if($files = $request->file('images')){

        foreach ($files as $key => $file) {

          $file->storeAs('public/upload', $filename);

          $add =  \App\Models\Photo::create([
            'filename' => $filename,
            'title'=>$request->input('title'),
            // 'sku'=> Produce::getUniqueSku(),
            'description'=>$request->input('description'),
            'price'=>$request->input('price'),
            'city'=>$request->input('city'),
            'uniq_val' => $unique_value
            // 'email'=>$request->input('email')
          ]);
          $filename = 'image_'.uniqid();
        }
      }

      $result = Annonce::create([
        'unique_value'=> $unique_value,
        'photos_id'=>$add->id,
        'description'=>$request->input('description'),
        'price'=>$request->input('price'),
        'city'=>$request->input('city'),
        'filename'=>$temp,
        'title'=>$request->input('title')
        ]
      );

// dd($result);

  // return back()->with('success', 'You have been registered succesfuly');
  // $photos = Photo::all();
  // $sending = Annonce::all();
  return redirect()->action('allcategoriesController@show');
}

}

<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\produce;
use App\Models\Photo;


class produceController extends Controller
{
    //
    public function showProduce(){
      return view('postad');
    }

    public function addProduce(Request $request){
      $add;
      $result = \App\Models\Produce::create(
        [
          'title'=>$request->input('title'),
          'sku'=> Produce::getUniqueSku(),
          'description'=>$request->input('description'),
          'name'=>$request->input('name'),
          'phone'=>$request->input('phone'),
          'email'=>$request->input('email')
        ]
      );

      if($files = $request->file('images')){

        foreach ($files as $key => $file) {

          $filename = $file->store('upload');

          $add =  \App\Models\Photo::create([
            'filename' => $filename,
            'produces_id'=>$result->id,
            'users_id' => $request->name
          ]);
        }
      }
  return back()->with('success', 'You have been registered succesfuly');
}

}

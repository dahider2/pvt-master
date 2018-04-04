<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Photo;

class allcategoriesController extends Controller
{
    //

    public function show(){
      $produces = Produce::find(21);
      // $produces_id = $produces->get('id');
      $photos = Photo::all();
      //$imaj;
      //foreach ($produces as $prod) {
        # code...
        $imaj = Photo::where('produces_id',$produces->id)->get();
        dd($imaj);
      //}
      return view('allcategories')->with('produces', $produces)->with('photos', $imaj);
    }
}

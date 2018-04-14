<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Annonce;
use App\Models\Photo;

class allcategoriesController extends Controller
{
    //

    public function show(){
      // $produces = Produce::all();
      // $produces_id = $produces->get('id');
      //$imaj;
      //foreach ($produces as $prod) {
        # code...
        // $photo = Photo::where('produces_id',$produces_id)->get();
      //}
      // dd($photos);
      // return View::make('allcategories')->with('produces', $produces)->with('photos', $photos);
      $i =1;
      $photos = Photo::all();
      $annonce = Annonce::all();

// dd($annonce);
      return view('allcategories')->with('photos',$annonce);
      // return view('allcategories', ["photos"=>$photos]);
    }
}

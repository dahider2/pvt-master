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
      
      $photos = Photo::all();
      $annonce = Annonce::orderBy('id','DESC')->get();

// dd($annonce);
      return view('allcategories')->with('photos',$annonce);
      // return view('allcategories', ["photos"=>$photos]);
    }
}

<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Item;
use App\Models\Photo;
use App\Http\Controllers\Controller;
use App\User;


class allcategoriesController extends Controller
{
    //

    public function show(){
      // $items = Item::all();
      // $photos = Photo::all();
      // dd($photos);

      $items = Photo::with('item')->get();
      dd($items);
      foreach($items as $item){
        echo $item->photos->id;
      }
      // return view('allcategories')->with('items', $items)->with('photos', $photos);
    }
}

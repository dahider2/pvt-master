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
      $items = Item::all();
      $photos = Photo::all();
      $container = collect();
      foreach ($items as $item) {
        // echo $item->id."\n";
        $photosRefs = Photo::where('item_id',$item->id)->get();
            foreach ($photosRefs as $photosRef) {
              $containerTemp = collect();
              $containerTemp->push($photosRef);
              $containerTemp->push($item);
              $container->push($containerTemp);
            }
        // echo $photosRef."\n";
        // array_push($container,[$photosRef,$item]);
        // $container->push($photosRef);
        // $container->push($photosRef);

      }
      // dd($photosRef);
      // dd($container);

      // $items = Photo::with('item')->get();
      // dd($items);

      return view('allcategories')->with('containers', $container);
    }
}

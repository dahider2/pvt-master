<?php

// namespace App\Helpers;
use App\Models\Photo;
// use App\Models\Produce;
//
// class EventHelpers{
//   public static function imgview($id){
//     $img = Photo::whereId('$id');
//   }
// }

function imgview($id){

  $img = Photo::all();

  dump($img);
  return $img;
}

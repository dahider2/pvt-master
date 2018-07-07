<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\produce;
use App\Models\CityArea;
use App\Models\ItemLocation;
use App\Models\Photo;
use App\Models\Item;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


// use Illuminate\Foundation\Auth\RegistersUsers;

use DB;
use App\User;


class produceController extends Controller
{
    private $Register;
    private $Login;
    private $item;
    public function __construct(RegisterController $Register, Item $item, LoginController $Login){
      $this->Register = $Register;
      $this->Login = $Login;
      $this->item = $item;
    }
    //
    public function showProduce(){
      $countries = DB::table("countries")->pluck("name", "id");
      $categories = \App\Models\Category::where('parent_id',0)->get();
      $cities = \App\Models\City::all();
      // dump($categories);
      return view('postad',['cities'=>$cities, 'categories'=>$categories]);
    }

    public function getCityAreasList(Request $request){
      $city_id = $request->cat_id;
      $city_areas = CityArea::where('city_id',$city_id)->get();
      return response()->json($city_areas);
    }

    public function getSubCategory(Request $request){
      $parent_id = $request->parent_id;
      $subCategory = \App\Models\Category::where('parent_id',$parent_id)->get();
      return response()->json($subCategory);
    }

    public function getEmailUser(Request $request){
      $user = User::where('email', '=', $request->email)->first();
      return response()->json($user);
    }


    public function addProduce(Request $request){
      // dd($request);
      $user = User::where('email', '=', $request->email)->first();
          if ($user === null) {
            //  $resultRegister = $this->Register->register($request);
            //  dd($resultRegister);
            // return redirect()->route('allcategories');
          }else {
            // $resultLogin = $this->Login->login($request);
            // if($resultLogin != null){
              // createAnItem($request);
            }

          $item_id = uniqid();



            // dd($data);
            // dd($request);
                if($request->input('category') > 0){
                  if($request->input('subcategory') > 0){
                    $category = $request->input('subcategory');
                  }else{
                    $category = $request->input('category');
                  }
                }

                if($request->input('areas') > 0){
                  if($request->input('cities') > 0){
                    $location = $request->input('cities');
                  }else{
                    $location = $request->input('area');
                  }
                }


                $itemLocation = ItemLocation::create([
                  'item_id' => $item_id,
                  'country_id' => 0,
                  'city_id' => $request->input('cities'),
                  'city_area_id' => (($request->input('area'))?$request->input('area'):0),
                ]);

                $verify_item = Item::create([
                  'user_id' => $user->id,
                  'id' => $item_id,
                  'category_id' => $category,
                  'title' => $request->input('title'),
                  'price' => (double) $request->input('price'),
                  'description' => $request->input('description'),
                  'item_location_id' => $itemLocation->id
                ]);
                if($verify_item){
                $data = Array();
                if($request->file('images')){
                  $files = $request->file('images');
                  foreach ($files as $key => $file) {
                          $filename = $file->store('public/upload');
                          array_push($data,['filename' => $filename, 'item_id' => $item_id,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
                        }
                  }
                // $photographie = $this->item->photos()->createMany([$data]);

                Photo::insert($data);
              }


              return redirect()->route('allcategories');
            }


  // return back()->with('success', 'You have been registered succesfuly');
  // return 'postad';

}

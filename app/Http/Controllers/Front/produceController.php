<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\produce;
use App\Models\CityArea;
use App\Models\Photo;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Redirect;

// use Illuminate\Foundation\Auth\RegistersUsers;

use DB;
use App\User;


class produceController extends Controller
{
    private $Register;
    private $Login;
    public function __construct(RegisterController $Register, LoginController $Login){
      $this->Register = $Register;
      $this->Login = $Login;
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

      $user = User::where('email', '=', $request->email)->first();
          if ($user === null) {
             $resultRegister = $this->Register->register($request);
            //  dd($resultRegister);
            return redirect()->route('allcategories');
          }else{
            $resultLogin = $this->Login->login($request);
            if($resultLogin != null){
              // createAnItem($request);
              if($request->input('category') > 0){
                if($request->input('subcategory') > 0){
                  $category = $request->input('subcategory');
                }else{
                  $category = $request->input('category');
                }
              }

          $item_id = uniqid();
          if($request->file('images')){
            $files = $request->file('images');

            foreach ($files as $key => $file) {
                    $filename = $file->store('public/upload');
                    $add =  \App\Models\Photo::create([
                      'filename' => $filename,
                      'item_id'=> $item_id
                    ]);
                  }
                }

            dd($request);
            $result = \App\Models\Item::create(
              [
                'item_id'=> $item_id,
                'user_id'=> $user->id,
                'category_id'=> $category,
                'title'=>$request->input('title'),
                'price'=> $request->input('price'),
                'description'=>$request->input('description')
                // 'premium' => '',
                // 'active'=> '',
                // 'sku'=> Produce::getUniqueSku(),
                // 'name'=>$request->input('name'),
                // 'phone'=>$request->input('phone'),
                // 'email'=>$request->input('email')
              ]);
            }
          }
        return redirect()->route('allcategories');

  // return back()->with('success', 'You have been registered succesfuly');
  // return 'postad';
}

}

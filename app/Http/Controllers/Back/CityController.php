<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = City::with('country')->get();
        //dd($datas);
        return view('admin.city.show',compact('datas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::pluck('name','id')->all();
        return view('admin.city.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
                'name' => 'bail|required|min:3',
                'country'   => 'bail|required',
                
            ]);
        $input = $request->all();
        City::create([
        'country_id' => $input['country'],
        'name' => $input['name'],
        ]);
        return back()->with('success', 'Bravo! Action reussi.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $default = City::with('country')->where('id',$id)->first();
        $countries = Country::pluck('name','id')->all();
        return view('admin.city.edit',compact('default','countries'));

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
              'name' => 'required|min:3',
                
         ]);
        $input = $request->all();
        $city = City::find($id);
        $city->name       = $input['name'];
        $city->country_id = $input['id'];
        $city->save();

         return Redirect::route('city.index')->with('success', 'Bravo! Action reussi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete ();
       return Redirect::route('city.index')->with('success', 'Bravo! Action reussi.');
    }
}

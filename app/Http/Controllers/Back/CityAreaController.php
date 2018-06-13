<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\CityArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CityAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = CityArea::with('city')->get();
        //dd($datas);
        return view('admin.area.show',compact('datas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::pluck('name','id')->all();
        return view('admin.area.create',compact('cities'));
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
                'city'   => 'bail|required',
                
            ]);
        $input = $request->all();
        CityArea::create([
        'city_id' => $input['city'],
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
        $default = CityArea::with('city')->where('id',$id)->first();
        $cities = City::pluck('name','id')->all();
        return view('admin.area.edit',compact('default','cities'));

        
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
        $area = CityArea::find($id);
        $area->name       = $input['name'];
        $area->city_id = $input['id'];
        $area->save();

         return Redirect::route('area.index')->with('success', 'Bravo! Action reussi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CityArea $area)
    {
        $area->delete ();
       return Redirect::route('area.index')->with('success', 'Bravo! Action reussi.');
    }
}